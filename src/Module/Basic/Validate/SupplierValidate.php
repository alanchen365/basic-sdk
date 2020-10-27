<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class SupplierValidate
{
    protected static $alias = [
        'id' => '',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'code' => '唯一编码',
        'name' => '供应商名',
        'short_name' => '简称',
        'contact_name' => '联系人',
        'contact_mobile' => '联系人手机号',
        'areapathid' => '区域编号',
        'province' => '省',
        'city' => '市',
        'district' => '区',
        'street' => '街道',
        'address' => '地址',
        'amap' => '高德经纬度',
        'status' => '供应商帐号状态 NORMAL 正常 LOCK 锁定',
        'type' => '供应商类型 ',
        'remark' => '备注',
        'create_user_name' => '创建人用户名',
        'create_user_code' => '创建人code',
        'create_time' => '创建时间',
        'update_time' => '最后更新时间',
        'delete_flg' => '是否删除',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', SupplierValidate::$alias['id']);
        // $validate->addColumn('app_code', SupplierValidate::$alias['app_code']);
        // $validate->addColumn('code', SupplierValidate::$alias['code']);
        // $validate->addColumn('name', SupplierValidate::$alias['name']);
        // $validate->addColumn('short_name', SupplierValidate::$alias['short_name']);
        // $validate->addColumn('contact_name', SupplierValidate::$alias['contact_name']);
        // $validate->addColumn('contact_mobile', SupplierValidate::$alias['contact_mobile']);
        // $validate->addColumn('areapathid', SupplierValidate::$alias['areapathid']);
        // $validate->addColumn('province', SupplierValidate::$alias['province']);
        // $validate->addColumn('city', SupplierValidate::$alias['city']);
        // $validate->addColumn('district', SupplierValidate::$alias['district']);
        // $validate->addColumn('street', SupplierValidate::$alias['street']);
        // $validate->addColumn('address', SupplierValidate::$alias['address']);
        // $validate->addColumn('amap', SupplierValidate::$alias['amap']);
        // $validate->addColumn('status', SupplierValidate::$alias['status']);
        // $validate->addColumn('type', SupplierValidate::$alias['type']);
        // $validate->addColumn('remark', SupplierValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', SupplierValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', SupplierValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', SupplierValidate::$alias['create_time']);
        // $validate->addColumn('update_time', SupplierValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', SupplierValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', SupplierValidate::$alias['id']);
        // $validate->addColumn('app_code', SupplierValidate::$alias['app_code']);
        // $validate->addColumn('code', SupplierValidate::$alias['code']);
        // $validate->addColumn('name', SupplierValidate::$alias['name']);
        // $validate->addColumn('short_name', SupplierValidate::$alias['short_name']);
        // $validate->addColumn('contact_name', SupplierValidate::$alias['contact_name']);
        // $validate->addColumn('contact_mobile', SupplierValidate::$alias['contact_mobile']);
        // $validate->addColumn('areapathid', SupplierValidate::$alias['areapathid']);
        // $validate->addColumn('province', SupplierValidate::$alias['province']);
        // $validate->addColumn('city', SupplierValidate::$alias['city']);
        // $validate->addColumn('district', SupplierValidate::$alias['district']);
        // $validate->addColumn('street', SupplierValidate::$alias['street']);
        // $validate->addColumn('address', SupplierValidate::$alias['address']);
        // $validate->addColumn('amap', SupplierValidate::$alias['amap']);
        // $validate->addColumn('status', SupplierValidate::$alias['status']);
        // $validate->addColumn('type', SupplierValidate::$alias['type']);
        // $validate->addColumn('remark', SupplierValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', SupplierValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', SupplierValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', SupplierValidate::$alias['create_time']);
        // $validate->addColumn('update_time', SupplierValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', SupplierValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', SupplierValidate::$alias['id']);
        // $validate->addColumn('app_code', SupplierValidate::$alias['app_code']);
        // $validate->addColumn('code', SupplierValidate::$alias['code']);
        // $validate->addColumn('name', SupplierValidate::$alias['name']);
        // $validate->addColumn('short_name', SupplierValidate::$alias['short_name']);
        // $validate->addColumn('contact_name', SupplierValidate::$alias['contact_name']);
        // $validate->addColumn('contact_mobile', SupplierValidate::$alias['contact_mobile']);
        // $validate->addColumn('areapathid', SupplierValidate::$alias['areapathid']);
        // $validate->addColumn('province', SupplierValidate::$alias['province']);
        // $validate->addColumn('city', SupplierValidate::$alias['city']);
        // $validate->addColumn('district', SupplierValidate::$alias['district']);
        // $validate->addColumn('street', SupplierValidate::$alias['street']);
        // $validate->addColumn('address', SupplierValidate::$alias['address']);
        // $validate->addColumn('amap', SupplierValidate::$alias['amap']);
        // $validate->addColumn('status', SupplierValidate::$alias['status']);
        // $validate->addColumn('type', SupplierValidate::$alias['type']);
        // $validate->addColumn('remark', SupplierValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', SupplierValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', SupplierValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', SupplierValidate::$alias['create_time']);
        // $validate->addColumn('update_time', SupplierValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', SupplierValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', SupplierValidate::$alias['id']);
        // $validate->addColumn('app_code', SupplierValidate::$alias['app_code']);
        // $validate->addColumn('code', SupplierValidate::$alias['code']);
        // $validate->addColumn('name', SupplierValidate::$alias['name']);
        // $validate->addColumn('short_name', SupplierValidate::$alias['short_name']);
        // $validate->addColumn('contact_name', SupplierValidate::$alias['contact_name']);
        // $validate->addColumn('contact_mobile', SupplierValidate::$alias['contact_mobile']);
        // $validate->addColumn('areapathid', SupplierValidate::$alias['areapathid']);
        // $validate->addColumn('province', SupplierValidate::$alias['province']);
        // $validate->addColumn('city', SupplierValidate::$alias['city']);
        // $validate->addColumn('district', SupplierValidate::$alias['district']);
        // $validate->addColumn('street', SupplierValidate::$alias['street']);
        // $validate->addColumn('address', SupplierValidate::$alias['address']);
        // $validate->addColumn('amap', SupplierValidate::$alias['amap']);
        // $validate->addColumn('status', SupplierValidate::$alias['status']);
        // $validate->addColumn('type', SupplierValidate::$alias['type']);
        // $validate->addColumn('remark', SupplierValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', SupplierValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', SupplierValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', SupplierValidate::$alias['create_time']);
        // $validate->addColumn('update_time', SupplierValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', SupplierValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', SupplierValidate::$alias['id']);
        // $validate->addColumn('app_code', SupplierValidate::$alias['app_code']);
        // $validate->addColumn('code', SupplierValidate::$alias['code']);
        // $validate->addColumn('name', SupplierValidate::$alias['name']);
        // $validate->addColumn('short_name', SupplierValidate::$alias['short_name']);
        // $validate->addColumn('contact_name', SupplierValidate::$alias['contact_name']);
        // $validate->addColumn('contact_mobile', SupplierValidate::$alias['contact_mobile']);
        // $validate->addColumn('areapathid', SupplierValidate::$alias['areapathid']);
        // $validate->addColumn('province', SupplierValidate::$alias['province']);
        // $validate->addColumn('city', SupplierValidate::$alias['city']);
        // $validate->addColumn('district', SupplierValidate::$alias['district']);
        // $validate->addColumn('street', SupplierValidate::$alias['street']);
        // $validate->addColumn('address', SupplierValidate::$alias['address']);
        // $validate->addColumn('amap', SupplierValidate::$alias['amap']);
        // $validate->addColumn('status', SupplierValidate::$alias['status']);
        // $validate->addColumn('type', SupplierValidate::$alias['type']);
        // $validate->addColumn('remark', SupplierValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', SupplierValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', SupplierValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', SupplierValidate::$alias['create_time']);
        // $validate->addColumn('update_time', SupplierValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', SupplierValidate::$alias['delete_flg']);
        
        return $validate;
    }
}
