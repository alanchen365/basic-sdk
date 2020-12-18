<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\OrderOutProDao;

class OrderOutProService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new OrderOutProDao());
    }

    /**
     * dao
     * @return OrderOutProDao
     */
    public function getDao(): OrderOutProDao
    {
        return $this->dao;
    }
}
