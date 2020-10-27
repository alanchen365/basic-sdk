<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class RegionDepotValidate
{
    protected static $alias = [
        'id' => '',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'region_code' => '大区',
        'depot_code' => '仓库',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RegionDepotValidate::$alias['id']);
        // $validate->addColumn('app_code', RegionDepotValidate::$alias['app_code']);
        // $validate->addColumn('region_code', RegionDepotValidate::$alias['region_code']);
        // $validate->addColumn('depot_code', RegionDepotValidate::$alias['depot_code']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RegionDepotValidate::$alias['id']);
        // $validate->addColumn('app_code', RegionDepotValidate::$alias['app_code']);
        // $validate->addColumn('region_code', RegionDepotValidate::$alias['region_code']);
        // $validate->addColumn('depot_code', RegionDepotValidate::$alias['depot_code']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RegionDepotValidate::$alias['id']);
        // $validate->addColumn('app_code', RegionDepotValidate::$alias['app_code']);
        // $validate->addColumn('region_code', RegionDepotValidate::$alias['region_code']);
        // $validate->addColumn('depot_code', RegionDepotValidate::$alias['depot_code']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RegionDepotValidate::$alias['id']);
        // $validate->addColumn('app_code', RegionDepotValidate::$alias['app_code']);
        // $validate->addColumn('region_code', RegionDepotValidate::$alias['region_code']);
        // $validate->addColumn('depot_code', RegionDepotValidate::$alias['depot_code']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RegionDepotValidate::$alias['id']);
        // $validate->addColumn('app_code', RegionDepotValidate::$alias['app_code']);
        // $validate->addColumn('region_code', RegionDepotValidate::$alias['region_code']);
        // $validate->addColumn('depot_code', RegionDepotValidate::$alias['depot_code']);
        
        return $validate;
    }
}
