<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\ProductBrandService;

class ProductBrand extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return ProductBrandService
     */
    public function getService(): ProductBrandService
    {
        return $this->service;
    }
}