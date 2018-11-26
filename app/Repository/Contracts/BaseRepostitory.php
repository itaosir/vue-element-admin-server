<?php

namespace App\Repository\Contracts;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface BaseRepostitory
 *
 * @author  luotao
 * @version 1.0
 * @package App\Repository\Contracts
 */
interface BaseRepostitory extends RepositoryInterface
{
    /**
     * 添加一个筛选标准
     *
     * @param $criteria
     *
     * @return mixed
     */
    public function pushCriteria($criteria);
    
    /**
     * 根据条件更新
     *
     * @param array    $attributes
     * @param \Closure $where
     *
     * @return int
     */
    public function updateWhere(array $attributes, \Closure $where) : int;
}
