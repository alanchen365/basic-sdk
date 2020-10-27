<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\RegionDepotService;

class RegionDepot extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return RegionDepotService
     */
    public function getService(): RegionDepotService
    {
        return $this->service;
    }
}