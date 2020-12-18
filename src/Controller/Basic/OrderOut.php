<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\OrderOutService;

class OrderOut extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return OrderOutService
     */
    public function getService(): OrderOutService
    {
        return $this->service;
    }
}