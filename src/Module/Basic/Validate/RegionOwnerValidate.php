<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class RegionOwnerValidate
{
    protected static $alias = [
        'id' => '',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'region_code' => '大区',
        'owner_code' => '货主',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RegionOwnerValidate::$alias['id']);
        // $validate->addColumn('app_code', RegionOwnerValidate::$alias['app_code']);
        // $validate->addColumn('region_code', RegionOwnerValidate::$alias['region_code']);
        // $validate->addColumn('owner_code', RegionOwnerValidate::$alias['owner_code']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RegionOwnerValidate::$alias['id']);
        // $validate->addColumn('app_code', RegionOwnerValidate::$alias['app_code']);
        // $validate->addColumn('region_code', RegionOwnerValidate::$alias['region_code']);
        // $validate->addColumn('owner_code', RegionOwnerValidate::$alias['owner_code']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RegionOwnerValidate::$alias['id']);
        // $validate->addColumn('app_code', RegionOwnerValidate::$alias['app_code']);
        // $validate->addColumn('region_code', RegionOwnerValidate::$alias['region_code']);
        // $validate->addColumn('owner_code', RegionOwnerValidate::$alias['owner_code']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RegionOwnerValidate::$alias['id']);
        // $validate->addColumn('app_code', RegionOwnerValidate::$alias['app_code']);
        // $validate->addColumn('region_code', RegionOwnerValidate::$alias['region_code']);
        // $validate->addColumn('owner_code', RegionOwnerValidate::$alias['owner_code']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RegionOwnerValidate::$alias['id']);
        // $validate->addColumn('app_code', RegionOwnerValidate::$alias['app_code']);
        // $validate->addColumn('region_code', RegionOwnerValidate::$alias['region_code']);
        // $validate->addColumn('owner_code', RegionOwnerValidate::$alias['owner_code']);
        
        return $validate;
    }
}
