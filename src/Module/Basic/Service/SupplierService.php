<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\SupplierDao;

class SupplierService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new SupplierDao());
    }

    /**
     * dao
     * @return SupplierDao
     */
    public function getDao(): SupplierDao
    {
        return $this->dao;
    }
}
