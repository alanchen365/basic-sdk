<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\ProductBrandDao;

class ProductBrandService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new ProductBrandDao());
    }

    /**
     * dao
     * @return ProductBrandDao
     */
    public function getDao(): ProductBrandDao
    {
        return $this->dao;
    }
}
