<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\OrderInModel;

class OrderInDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new OrderInModel());
    }

    /**
     * model
     * @return OrderInModel
     */
    public function getModel(): OrderInModel
    {
        return $this->model;
    }
}
