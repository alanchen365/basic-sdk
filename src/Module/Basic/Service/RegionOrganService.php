<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\RegionOrganDao;

class RegionOrganService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new RegionOrganDao());
    }

    /**
     * dao
     * @return RegionOrganDao
     */
    public function getDao(): RegionOrganDao
    {
        return $this->dao;
    }
}
