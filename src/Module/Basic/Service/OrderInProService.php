<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\OrderInProDao;

class OrderInProService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new OrderInProDao());
    }

    /**
     * dao
     * @return OrderInProDao
     */
    public function getDao(): OrderInProDao
    {
        return $this->dao;
    }
}
