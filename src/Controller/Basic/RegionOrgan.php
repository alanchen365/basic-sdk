<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\RegionOrganService;

class RegionOrgan extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return RegionOrganService
     */
    public function getService(): RegionOrganService
    {
        return $this->service;
    }
}