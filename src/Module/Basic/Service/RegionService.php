<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\RegionDao;

class RegionService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new RegionDao());
    }

    /**
     * dao
     * @return RegionDao
     */
    public function getDao(): RegionDao
    {
        return $this->dao;
    }
}
