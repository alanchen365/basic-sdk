<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\RegionOwnerModel;

class RegionOwnerDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new RegionOwnerModel());
    }

    /**
     * model
     * @return RegionOwnerModel
     */
    public function getModel(): RegionOwnerModel
    {
        return $this->model;
    }
}
