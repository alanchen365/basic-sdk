<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\RegionOrganModel;

class RegionOrganDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new RegionOrganModel());
    }

    /**
     * model
     * @return RegionOrganModel
     */
    public function getModel(): RegionOrganModel
    {
        return $this->model;
    }
}
