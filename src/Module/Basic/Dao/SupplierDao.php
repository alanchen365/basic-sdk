<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\SupplierModel;

class SupplierDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new SupplierModel());
    }

    /**
     * model
     * @return SupplierModel
     */
    public function getModel(): SupplierModel
    {
        return $this->model;
    }
}
