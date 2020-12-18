<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\OrderInProService;

class OrderInPro extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return OrderInProService
     */
    public function getService(): OrderInProService
    {
        return $this->service;
    }
}