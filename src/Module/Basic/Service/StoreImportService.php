<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\StoreImportDao;

class StoreImportService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new StoreImportDao());
    }

    /**
     * dao
     * @return StoreImportDao
     */
    public function getDao(): StoreImportDao
    {
        return $this->dao;
    }
}
