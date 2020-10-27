<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\RegionAreasModel;

class RegionAreasDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new RegionAreasModel());
    }

    /**
     * model
     * @return RegionAreasModel
     */
    public function getModel(): RegionAreasModel
    {
        return $this->model;
    }
}
