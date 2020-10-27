<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\ProductBrandModel;

class ProductBrandDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new ProductBrandModel());
    }

    /**
     * model
     * @return ProductBrandModel
     */
    public function getModel(): ProductBrandModel
    {
        return $this->model;
    }
}
