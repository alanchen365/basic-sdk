<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\OrderOutModel;

class OrderOutDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new OrderOutModel());
    }

    /**
     * model
     * @return OrderOutModel
     */
    public function getModel(): OrderOutModel
    {
        return $this->model;
    }
}
