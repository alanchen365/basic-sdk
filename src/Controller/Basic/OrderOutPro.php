<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\OrderOutProService;

class OrderOutPro extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return OrderOutProService
     */
    public function getService(): OrderOutProService
    {
        return $this->service;
    }
}