<?php

namespace App\Repository\Helper;

use Closure;

/**
 * Trait BeatchUpdate
 *
 *
 *
 * @author  luotao
 * @version 1.0
 * @package App\Repository\Helper
 */
trait BatchOperation
{
    /**
     * Delete multiple entities by given criteria.
     *
     * @param array   $attributes
     * @param Closure $where
     *
     * @return int
     */
    public function updateWhere(array $attributes, Closure $where) : int
    {
        return $this->model->where($where)->update($attributes);
    }
    
    /**
     * 批量插入
     *
     * @param array $values
     *
     * @return bool
     */
    public function insert(array $values) : bool
    {
        return $this->model->insert($values);
    }
}
