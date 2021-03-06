<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'admin',
                'path' => 'admin',
                'method' => 'GET',
                'description' => '管理员管理',
                'permission_type' => 1,
                'parent_id' => 0,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:36:32',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'admin.index',
                'path' => 'api/admin',
                'method' => 'GET|HEAD',
                'description' => '分页列表',
                'permission_type' => 1,
                'parent_id' => 1,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'admin.store',
                'path' => 'api/admin',
                'method' => 'POST',
                'description' => '创建用户',
                'permission_type' => 1,
                'parent_id' => 1,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'admin.batchDisabled',
                'path' => 'api/admin/_bulk/batchDisabled',
                'method' => 'POST',
                'description' => '批量禁用',
                'permission_type' => 1,
                'parent_id' => 1,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'admin.batchEnable',
                'path' => 'api/admin/_bulk/batchEnabled',
                'method' => 'POST',
                'description' => '批量启用',
                'permission_type' => 1,
                'parent_id' => 1,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'admin.auth.login',
                'path' => 'api/admin/auth/login',
                'method' => 'POST',
                'description' => '登陆',
                'permission_type' => 1,
                'parent_id' => 1,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'admin.auth.logout',
                'path' => 'api/admin/auth/logout',
                'method' => 'POST',
                'description' => '退出',
                'permission_type' => 1,
                'parent_id' => 1,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'admin.auth.refresh',
                'path' => 'api/admin/auth/refresh',
                'method' => 'POST',
                'description' => '刷新登陆',
                'permission_type' => 1,
                'parent_id' => 1,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'admin.auth.user',
                'path' => 'api/admin/auth/user',
                'method' => 'GET|HEAD',
                'description' => '当前用户',
                'permission_type' => 1,
                'parent_id' => 1,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'admin.show',
                'path' => 'api/admin/{admin}',
                'method' => 'GET|HEAD',
                'description' => '用户详情',
                'permission_type' => 1,
                'parent_id' => 1,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'admin.update',
                'path' => 'api/admin/{admin}',
                'method' => 'PUT|PATCH',
                'description' => '更新用户',
                'permission_type' => 1,
                'parent_id' => 1,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'admin.destroy',
                'path' => 'api/admin/{admin}',
                'method' => 'DELETE',
                'description' => '删除用户',
                'permission_type' => 1,
                'parent_id' => 1,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
            12 =>
            array (
                'id' => 13,
                'name' => 'admin.allotRole',
                'path' => 'api/admin/{uid}/roles',
                'method' => 'POST',
                'description' => '授予角色',
                'permission_type' => 1,
                'parent_id' => 1,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
            13 =>
            array (
                'id' => 14,
                'name' => 'admin.getRoleByRoleId',
                'path' => 'api/admin/{uid}/roles',
                'method' => 'GET|HEAD',
                'description' => '拥有角色',
                'permission_type' => 1,
                'parent_id' => 1,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
            14 =>
            array (
                'id' => 15,
                'name' => 'permission',
                'path' => 'permission',
                'method' => 'GET',
                'description' => '权限管理',
                'permission_type' => 1,
                'parent_id' => 0,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:36:33',
            ),
            15 =>
            array (
                'id' => 16,
                'name' => 'permission.store',
                'path' => 'api/permission',
                'method' => 'POST',
                'description' => '创建权限',
                'permission_type' => 1,
                'parent_id' => 15,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
            16 =>
            array (
                'id' => 17,
                'name' => 'permission.index',
                'path' => 'api/permission',
                'method' => 'GET|HEAD',
                'description' => '分页列表',
                'permission_type' => 1,
                'parent_id' => 15,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
            17 =>
            array (
                'id' => 18,
                'name' => 'permission.batchDisabled',
                'path' => 'api/permission/_bulk/batchDisabled',
                'method' => 'POST',
                'description' => '批量禁用',
                'permission_type' => 1,
                'parent_id' => 15,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
            18 =>
            array (
                'id' => 19,
                'name' => 'permission.batchEnable',
                'path' => 'api/permission/_bulk/batchEnable',
                'method' => 'POST',
                'description' => '批量启用',
                'permission_type' => 1,
                'parent_id' => 15,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
            19 =>
            array (
                'id' => 20,
                'name' => 'permission.theFrontEndPath',
                'path' => 'api/permission/frontend/path',
                'method' => 'GET|HEAD',
                'description' => '前端路径',
                'permission_type' => 1,
                'parent_id' => 15,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
            20 =>
            array (
                'id' => 21,
                'name' => 'permission.show',
                'path' => 'api/permission/{permission}',
                'method' => 'GET|HEAD',
                'description' => '权限详情',
                'permission_type' => 1,
                'parent_id' => 15,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
            21 =>
            array (
                'id' => 22,
                'name' => 'permission.update',
                'path' => 'api/permission/{permission}',
                'method' => 'PUT|PATCH',
                'description' => '更新权限',
                'permission_type' => 1,
                'parent_id' => 15,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
            22 =>
            array (
                'id' => 23,
                'name' => 'permission.destroy',
                'path' => 'api/permission/{permission}',
                'method' => 'DELETE',
                'description' => '删除权限',
                'permission_type' => 1,
                'parent_id' => 15,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
            23 =>
            array (
                'id' => 24,
                'name' => 'roles',
                'path' => 'roles',
                'method' => 'GET',
                'description' => '角色管理',
                'permission_type' => 1,
                'parent_id' => 0,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:36:33',
            ),
            24 =>
            array (
                'id' => 25,
                'name' => 'roles.index',
                'path' => 'api/roles',
                'method' => 'GET|HEAD',
                'description' => '分页列表',
                'permission_type' => 1,
                'parent_id' => 24,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
            25 =>
            array (
                'id' => 26,
                'name' => 'roles.store',
                'path' => 'api/roles',
                'method' => 'POST',
                'description' => '创建角色',
                'permission_type' => 1,
                'parent_id' => 24,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
            26 =>
            array (
                'id' => 27,
                'name' => 'roles.batchDisabled',
                'path' => 'api/roles/_bulk/batchDisabled',
                'method' => 'POST',
                'description' => '批量禁用',
                'permission_type' => 1,
                'parent_id' => 24,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
            27 =>
            array (
                'id' => 28,
                'name' => 'roles.batchEnable',
                'path' => 'api/roles/_bulk/batchEnable',
                'method' => 'POST',
                'description' => '批量启用',
                'permission_type' => 1,
                'parent_id' => 24,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
            28 =>
            array (
                'id' => 29,
                'name' => 'roles.allotPermission',
                'path' => 'api/roles/{roleid}/permission',
                'method' => 'POST',
                'description' => '分配权限',
                'permission_type' => 1,
                'parent_id' => 24,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
            29 =>
            array (
                'id' => 30,
                'name' => 'roles.getPermissionByRoleId',
                'path' => 'api/roles/{roleid}/permission',
                'method' => 'GET|HEAD',
                'description' => '拥有权限',
                'permission_type' => 1,
                'parent_id' => 24,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
            30 =>
            array (
                'id' => 31,
                'name' => 'roles.update',
                'path' => 'api/roles/{role}',
                'method' => 'PUT|PATCH',
                'description' => '更新角色',
                'permission_type' => 1,
                'parent_id' => 24,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
            31 =>
            array (
                'id' => 32,
                'name' => 'roles.destroy',
                'path' => 'api/roles/{role}',
                'method' => 'DELETE',
                'description' => '删除角色',
                'permission_type' => 1,
                'parent_id' => 24,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
            32 =>
            array (
                'id' => 33,
                'name' => 'roles.show',
                'path' => 'api/roles/{role}',
                'method' => 'GET|HEAD',
                'description' => '角色详情',
                'permission_type' => 1,
                'parent_id' => 24,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
            33 =>
            array (
                'id' => 34,
                'name' => 'system',
                'path' => 'system',
                'method' => 'GET',
                'description' => '系统管理',
                'permission_type' => 1,
                'parent_id' => 0,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:36:33',
            ),
            34 =>
            array (
                'id' => 35,
                'name' => 'system.health',
                'path' => 'api/system/health',
                'method' => 'GET|HEAD',
                'description' => '服务健康',
                'permission_type' => 1,
                'parent_id' => 34,
                'state' => 1,
                'is_deleted' => 0,
                'created_at' => '2018-12-28 14:35:08',
                'updated_at' => '2018-12-28 14:35:08',
            ),
        ));
        
        
    }
}
