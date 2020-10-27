<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\StoreImportModel;

class StoreImportDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new StoreImportModel());
    }

    /**
     * model
     * @return StoreImportModel
     */
    public function getModel(): StoreImportModel
    {
        return $this->model;
    }
}
