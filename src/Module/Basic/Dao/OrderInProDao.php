<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\OrderInProModel;

class OrderInProDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new OrderInProModel());
    }

    /**
     * model
     * @return OrderInProModel
     */
    public function getModel(): OrderInProModel
    {
        return $this->model;
    }
}
