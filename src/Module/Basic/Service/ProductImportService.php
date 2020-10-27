<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\ProductImportDao;

class ProductImportService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new ProductImportDao());
    }

    /**
     * dao
     * @return ProductImportDao
     */
    public function getDao(): ProductImportDao
    {
        return $this->dao;
    }
}
