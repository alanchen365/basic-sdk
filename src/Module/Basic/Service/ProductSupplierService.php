<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\ProductSupplierDao;

class ProductSupplierService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new ProductSupplierDao());
    }

    /**
     * dao
     * @return ProductSupplierDao
     */
    public function getDao(): ProductSupplierDao
    {
        return $this->dao;
    }
}
