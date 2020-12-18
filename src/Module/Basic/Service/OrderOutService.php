<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\OrderOutDao;

class OrderOutService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new OrderOutDao());
    }

    /**
     * dao
     * @return OrderOutDao
     */
    public function getDao(): OrderOutDao
    {
        return $this->dao;
    }
}
