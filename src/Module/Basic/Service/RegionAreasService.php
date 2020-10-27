<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\RegionAreasDao;

class RegionAreasService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new RegionAreasDao());
    }

    /**
     * dao
     * @return RegionAreasDao
     */
    public function getDao(): RegionAreasDao
    {
        return $this->dao;
    }
}
