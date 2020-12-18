<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\OrderOutProModel;

class OrderOutProDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new OrderOutProModel());
    }

    /**
     * model
     * @return OrderOutProModel
     */
    public function getModel(): OrderOutProModel
    {
        return $this->model;
    }
}
