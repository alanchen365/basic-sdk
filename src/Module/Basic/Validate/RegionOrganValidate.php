<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class RegionOrganValidate
{
    protected static $alias = [
        'id' => '',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'region_code' => '大区',
        'organ_code' => '组织',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RegionOrganValidate::$alias['id']);
        // $validate->addColumn('app_code', RegionOrganValidate::$alias['app_code']);
        // $validate->addColumn('region_code', RegionOrganValidate::$alias['region_code']);
        // $validate->addColumn('organ_code', RegionOrganValidate::$alias['organ_code']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RegionOrganValidate::$alias['id']);
        // $validate->addColumn('app_code', RegionOrganValidate::$alias['app_code']);
        // $validate->addColumn('region_code', RegionOrganValidate::$alias['region_code']);
        // $validate->addColumn('organ_code', RegionOrganValidate::$alias['organ_code']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RegionOrganValidate::$alias['id']);
        // $validate->addColumn('app_code', RegionOrganValidate::$alias['app_code']);
        // $validate->addColumn('region_code', RegionOrganValidate::$alias['region_code']);
        // $validate->addColumn('organ_code', RegionOrganValidate::$alias['organ_code']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RegionOrganValidate::$alias['id']);
        // $validate->addColumn('app_code', RegionOrganValidate::$alias['app_code']);
        // $validate->addColumn('region_code', RegionOrganValidate::$alias['region_code']);
        // $validate->addColumn('organ_code', RegionOrganValidate::$alias['organ_code']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RegionOrganValidate::$alias['id']);
        // $validate->addColumn('app_code', RegionOrganValidate::$alias['app_code']);
        // $validate->addColumn('region_code', RegionOrganValidate::$alias['region_code']);
        // $validate->addColumn('organ_code', RegionOrganValidate::$alias['organ_code']);
        
        return $validate;
    }
}
