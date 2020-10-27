<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\RegionOwnerDao;

class RegionOwnerService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new RegionOwnerDao());
    }

    /**
     * dao
     * @return RegionOwnerDao
     */
    public function getDao(): RegionOwnerDao
    {
        return $this->dao;
    }
}
