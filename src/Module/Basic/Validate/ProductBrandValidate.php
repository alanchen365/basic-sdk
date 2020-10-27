<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class ProductBrandValidate
{
    protected static $alias = [
        'id' => '',
        'code' => '唯一编码',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'name' => '标题',
        'logo' => 'logo',
        'intro' => '简介',
        'create_time' => '创建时间',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductBrandValidate::$alias['id']);
        // $validate->addColumn('code', ProductBrandValidate::$alias['code']);
        // $validate->addColumn('app_code', ProductBrandValidate::$alias['app_code']);
        // $validate->addColumn('name', ProductBrandValidate::$alias['name']);
        // $validate->addColumn('logo', ProductBrandValidate::$alias['logo']);
        // $validate->addColumn('intro', ProductBrandValidate::$alias['intro']);
        // $validate->addColumn('create_time', ProductBrandValidate::$alias['create_time']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductBrandValidate::$alias['id']);
        // $validate->addColumn('code', ProductBrandValidate::$alias['code']);
        // $validate->addColumn('app_code', ProductBrandValidate::$alias['app_code']);
        // $validate->addColumn('name', ProductBrandValidate::$alias['name']);
        // $validate->addColumn('logo', ProductBrandValidate::$alias['logo']);
        // $validate->addColumn('intro', ProductBrandValidate::$alias['intro']);
        // $validate->addColumn('create_time', ProductBrandValidate::$alias['create_time']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductBrandValidate::$alias['id']);
        // $validate->addColumn('code', ProductBrandValidate::$alias['code']);
        // $validate->addColumn('app_code', ProductBrandValidate::$alias['app_code']);
        // $validate->addColumn('name', ProductBrandValidate::$alias['name']);
        // $validate->addColumn('logo', ProductBrandValidate::$alias['logo']);
        // $validate->addColumn('intro', ProductBrandValidate::$alias['intro']);
        // $validate->addColumn('create_time', ProductBrandValidate::$alias['create_time']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductBrandValidate::$alias['id']);
        // $validate->addColumn('code', ProductBrandValidate::$alias['code']);
        // $validate->addColumn('app_code', ProductBrandValidate::$alias['app_code']);
        // $validate->addColumn('name', ProductBrandValidate::$alias['name']);
        // $validate->addColumn('logo', ProductBrandValidate::$alias['logo']);
        // $validate->addColumn('intro', ProductBrandValidate::$alias['intro']);
        // $validate->addColumn('create_time', ProductBrandValidate::$alias['create_time']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductBrandValidate::$alias['id']);
        // $validate->addColumn('code', ProductBrandValidate::$alias['code']);
        // $validate->addColumn('app_code', ProductBrandValidate::$alias['app_code']);
        // $validate->addColumn('name', ProductBrandValidate::$alias['name']);
        // $validate->addColumn('logo', ProductBrandValidate::$alias['logo']);
        // $validate->addColumn('intro', ProductBrandValidate::$alias['intro']);
        // $validate->addColumn('create_time', ProductBrandValidate::$alias['create_time']);
        
        return $validate;
    }
}
