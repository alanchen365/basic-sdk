<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\RegionAreasService;

class RegionAreas extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return RegionAreasService
     */
    public function getService(): RegionAreasService
    {
        return $this->service;
    }
}