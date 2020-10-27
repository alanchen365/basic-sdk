<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\RegionModel;

class RegionDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new RegionModel());
    }

    /**
     * model
     * @return RegionModel
     */
    public function getModel(): RegionModel
    {
        return $this->model;
    }
}
