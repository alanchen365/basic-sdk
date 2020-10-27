<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class RegionValidate
{
    protected static $alias = [
        'id' => '',
        'code' => '唯一编码',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'name' => '大区名称',
        'remark' => '备注',
        'create_user_name' => '创建人用户名',
        'create_user_code' => '创建人code',
        'create_time' => '创建时间',
        'update_time' => '最后更新时间',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RegionValidate::$alias['id']);
        // $validate->addColumn('code', RegionValidate::$alias['code']);
        // $validate->addColumn('app_code', RegionValidate::$alias['app_code']);
        // $validate->addColumn('name', RegionValidate::$alias['name']);
        // $validate->addColumn('remark', RegionValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', RegionValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', RegionValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', RegionValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RegionValidate::$alias['update_time']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RegionValidate::$alias['id']);
        // $validate->addColumn('code', RegionValidate::$alias['code']);
        // $validate->addColumn('app_code', RegionValidate::$alias['app_code']);
        // $validate->addColumn('name', RegionValidate::$alias['name']);
        // $validate->addColumn('remark', RegionValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', RegionValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', RegionValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', RegionValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RegionValidate::$alias['update_time']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RegionValidate::$alias['id']);
        // $validate->addColumn('code', RegionValidate::$alias['code']);
        // $validate->addColumn('app_code', RegionValidate::$alias['app_code']);
        // $validate->addColumn('name', RegionValidate::$alias['name']);
        // $validate->addColumn('remark', RegionValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', RegionValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', RegionValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', RegionValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RegionValidate::$alias['update_time']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RegionValidate::$alias['id']);
        // $validate->addColumn('code', RegionValidate::$alias['code']);
        // $validate->addColumn('app_code', RegionValidate::$alias['app_code']);
        // $validate->addColumn('name', RegionValidate::$alias['name']);
        // $validate->addColumn('remark', RegionValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', RegionValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', RegionValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', RegionValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RegionValidate::$alias['update_time']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RegionValidate::$alias['id']);
        // $validate->addColumn('code', RegionValidate::$alias['code']);
        // $validate->addColumn('app_code', RegionValidate::$alias['app_code']);
        // $validate->addColumn('name', RegionValidate::$alias['name']);
        // $validate->addColumn('remark', RegionValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', RegionValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', RegionValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', RegionValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RegionValidate::$alias['update_time']);
        
        return $validate;
    }
}
