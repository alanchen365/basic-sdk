<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\ProductImportService;

class ProductImport extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return ProductImportService
     */
    public function getService(): ProductImportService
    {
        return $this->service;
    }
}