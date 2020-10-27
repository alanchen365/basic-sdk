<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\ProductSupplierModel;

class ProductSupplierDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new ProductSupplierModel());
    }

    /**
     * model
     * @return ProductSupplierModel
     */
    public function getModel(): ProductSupplierModel
    {
        return $this->model;
    }
}
