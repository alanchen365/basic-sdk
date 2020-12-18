<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\OrderInService;

class OrderIn extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return OrderInService
     */
    public function getService(): OrderInService
    {
        return $this->service;
    }
}