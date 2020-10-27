<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\StoreImportService;

class StoreImport extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return StoreImportService
     */
    public function getService(): StoreImportService
    {
        return $this->service;
    }
}