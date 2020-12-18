<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\OrderInDao;

class OrderInService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new OrderInDao());
    }

    /**
     * dao
     * @return OrderInDao
     */
    public function getDao(): OrderInDao
    {
        return $this->dao;
    }
}
