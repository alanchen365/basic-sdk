<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\RegionService;

class Region extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return RegionService
     */
    public function getService(): RegionService
    {
        return $this->service;
    }
}