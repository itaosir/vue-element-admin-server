<?php

namespace App\Repository\Repositories;

use App\Constant\Permission\Type;
use App\Exceptions\ParamterErrorException;
use App\Models\Permission;
use App\Models\RolePermission;
use App\Repository\Contracts\RolePermissionRepository;
use App\Repository\Helper\BatchOperation;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Eloquent\BaseRepository;
use SupperHappysir\Constant\DeletedStateEnum;
use SupperHappysir\Constant\StateEnum;

/**
 * Class RolePermissionRepositoryEloquent.
 *
 * @property RolePermission $model
 * @package namespace App\Repository\Repositories;
 */
class RolePermissionRepositoryEloquent extends BaseRepository implements RolePermissionRepository
{
    use BatchOperation;
    
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model() : string
    {
        return RolePermission::class;
    }
    
    /**
     * 删除角色ID上的权限
     *
     * @param int $roleId
     *
     * @return int
     */
    public function deletePermissionByRoleId(int $roleId) : int
    {
        if (!$roleId) {
            throw new ParamterErrorException('请传递roleId参数');
        }
        
        return $this->deleteWhere([
            'role_id' => $roleId
        ]);
    }
    
    /**
     * 根据角色ID获取角色权限path路径
     *
     * @param int $roleId
     *
     * @return array
     */
    public function getFrontendPathByRoleId(int $roleId) : array
    {
        return DB::table(RolePermission::tableName() . ' as rp')
                 ->leftJoin(
                     Permission::tableName() . ' as p',
                     'rp.permission_id',
                     '=',
                     'p.id'
                 )
                 ->where('p.per_type', Type::MENU)
                 ->where('p.state', StateEnum::ENABLED)
                 ->where('p.is_deleted', DeletedStateEnum::NORMAL)
                 ->pluck('p.path', 'p.id')->toArray();
        // return $this->model->whereHas('permission', function ($query) {
        //     $query->where('per_type', Type::MENU);
        // })->with('permission')->select(['id', 'permission_id'])->get()->toArray();
    }
}
