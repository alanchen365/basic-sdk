<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\RegionDepotModel;

class RegionDepotDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new RegionDepotModel());
    }

    /**
     * model
     * @return RegionDepotModel
     */
    public function getModel(): RegionDepotModel
    {
        return $this->model;
    }
}
