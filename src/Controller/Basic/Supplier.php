<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\SupplierService;

class Supplier extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return SupplierService
     */
    public function getService(): SupplierService
    {
        return $this->service;
    }
}