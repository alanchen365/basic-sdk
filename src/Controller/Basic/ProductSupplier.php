<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\ProductSupplierService;

class ProductSupplier extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return ProductSupplierService
     */
    public function getService(): ProductSupplierService
    {
        return $this->service;
    }
}