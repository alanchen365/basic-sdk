<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\ProductImportModel;

class ProductImportDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new ProductImportModel());
    }

    /**
     * model
     * @return ProductImportModel
     */
    public function getModel(): ProductImportModel
    {
        return $this->model;
    }
}
