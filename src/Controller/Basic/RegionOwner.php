<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\RegionOwnerService;

class RegionOwner extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return RegionOwnerService
     */
    public function getService(): RegionOwnerService
    {
        return $this->service;
    }
}