<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\RegionDepotDao;

class RegionDepotService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new RegionDepotDao());
    }

    /**
     * dao
     * @return RegionDepotDao
     */
    public function getDao(): RegionDepotDao
    {
        return $this->dao;
    }
}
