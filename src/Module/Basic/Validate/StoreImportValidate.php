<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class StoreImportValidate
{
    protected static $alias = [
        'id' => '',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'store_owner_id' => '货主编号',
        'store_owner_name' => '货主名称',
        'store_center_name' => '运营中心名称',
        'store_center_id' => '运营中心编号',
        'store_purchase_name' => '采购名称',
        'store_purchase_account' => '采购账号',
        'store_depot_name' => '关联仓库名称',
        'store_depot_id' => '关联仓库ID',
        'purchase_name' => '关联总采购',
        'purchase_id' => '关联总采购ID',
        'name' => '名称',
        'short_name' => '简称',
        'code' => '门店编码',
        'contacts' => '联系人',
        'tel' => '联系电话',
        'address_contact' => '收货人',
        'address_mobile' => '收货人手机',
        'address_province' => '省',
        'address_city' => '市',
        'address_district' => '区',
        'address_address' => '地址',
        'address_pathid' => '区域编号',
        'create_time' => '创建时间',
        'row_number' => '表格行数',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', StoreImportValidate::$alias['id']);
        // $validate->addColumn('app_code', StoreImportValidate::$alias['app_code']);
        // $validate->addColumn('store_owner_id', StoreImportValidate::$alias['store_owner_id']);
        // $validate->addColumn('store_owner_name', StoreImportValidate::$alias['store_owner_name']);
        // $validate->addColumn('store_center_name', StoreImportValidate::$alias['store_center_name']);
        // $validate->addColumn('store_center_id', StoreImportValidate::$alias['store_center_id']);
        // $validate->addColumn('store_purchase_name', StoreImportValidate::$alias['store_purchase_name']);
        // $validate->addColumn('store_purchase_account', StoreImportValidate::$alias['store_purchase_account']);
        // $validate->addColumn('store_depot_name', StoreImportValidate::$alias['store_depot_name']);
        // $validate->addColumn('store_depot_id', StoreImportValidate::$alias['store_depot_id']);
        // $validate->addColumn('purchase_name', StoreImportValidate::$alias['purchase_name']);
        // $validate->addColumn('purchase_id', StoreImportValidate::$alias['purchase_id']);
        // $validate->addColumn('name', StoreImportValidate::$alias['name']);
        // $validate->addColumn('short_name', StoreImportValidate::$alias['short_name']);
        // $validate->addColumn('code', StoreImportValidate::$alias['code']);
        // $validate->addColumn('contacts', StoreImportValidate::$alias['contacts']);
        // $validate->addColumn('tel', StoreImportValidate::$alias['tel']);
        // $validate->addColumn('address_contact', StoreImportValidate::$alias['address_contact']);
        // $validate->addColumn('address_mobile', StoreImportValidate::$alias['address_mobile']);
        // $validate->addColumn('address_province', StoreImportValidate::$alias['address_province']);
        // $validate->addColumn('address_city', StoreImportValidate::$alias['address_city']);
        // $validate->addColumn('address_district', StoreImportValidate::$alias['address_district']);
        // $validate->addColumn('address_address', StoreImportValidate::$alias['address_address']);
        // $validate->addColumn('address_pathid', StoreImportValidate::$alias['address_pathid']);
        // $validate->addColumn('create_time', StoreImportValidate::$alias['create_time']);
        // $validate->addColumn('row_number', StoreImportValidate::$alias['row_number']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', StoreImportValidate::$alias['id']);
        // $validate->addColumn('app_code', StoreImportValidate::$alias['app_code']);
        // $validate->addColumn('store_owner_id', StoreImportValidate::$alias['store_owner_id']);
        // $validate->addColumn('store_owner_name', StoreImportValidate::$alias['store_owner_name']);
        // $validate->addColumn('store_center_name', StoreImportValidate::$alias['store_center_name']);
        // $validate->addColumn('store_center_id', StoreImportValidate::$alias['store_center_id']);
        // $validate->addColumn('store_purchase_name', StoreImportValidate::$alias['store_purchase_name']);
        // $validate->addColumn('store_purchase_account', StoreImportValidate::$alias['store_purchase_account']);
        // $validate->addColumn('store_depot_name', StoreImportValidate::$alias['store_depot_name']);
        // $validate->addColumn('store_depot_id', StoreImportValidate::$alias['store_depot_id']);
        // $validate->addColumn('purchase_name', StoreImportValidate::$alias['purchase_name']);
        // $validate->addColumn('purchase_id', StoreImportValidate::$alias['purchase_id']);
        // $validate->addColumn('name', StoreImportValidate::$alias['name']);
        // $validate->addColumn('short_name', StoreImportValidate::$alias['short_name']);
        // $validate->addColumn('code', StoreImportValidate::$alias['code']);
        // $validate->addColumn('contacts', StoreImportValidate::$alias['contacts']);
        // $validate->addColumn('tel', StoreImportValidate::$alias['tel']);
        // $validate->addColumn('address_contact', StoreImportValidate::$alias['address_contact']);
        // $validate->addColumn('address_mobile', StoreImportValidate::$alias['address_mobile']);
        // $validate->addColumn('address_province', StoreImportValidate::$alias['address_province']);
        // $validate->addColumn('address_city', StoreImportValidate::$alias['address_city']);
        // $validate->addColumn('address_district', StoreImportValidate::$alias['address_district']);
        // $validate->addColumn('address_address', StoreImportValidate::$alias['address_address']);
        // $validate->addColumn('address_pathid', StoreImportValidate::$alias['address_pathid']);
        // $validate->addColumn('create_time', StoreImportValidate::$alias['create_time']);
        // $validate->addColumn('row_number', StoreImportValidate::$alias['row_number']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', StoreImportValidate::$alias['id']);
        // $validate->addColumn('app_code', StoreImportValidate::$alias['app_code']);
        // $validate->addColumn('store_owner_id', StoreImportValidate::$alias['store_owner_id']);
        // $validate->addColumn('store_owner_name', StoreImportValidate::$alias['store_owner_name']);
        // $validate->addColumn('store_center_name', StoreImportValidate::$alias['store_center_name']);
        // $validate->addColumn('store_center_id', StoreImportValidate::$alias['store_center_id']);
        // $validate->addColumn('store_purchase_name', StoreImportValidate::$alias['store_purchase_name']);
        // $validate->addColumn('store_purchase_account', StoreImportValidate::$alias['store_purchase_account']);
        // $validate->addColumn('store_depot_name', StoreImportValidate::$alias['store_depot_name']);
        // $validate->addColumn('store_depot_id', StoreImportValidate::$alias['store_depot_id']);
        // $validate->addColumn('purchase_name', StoreImportValidate::$alias['purchase_name']);
        // $validate->addColumn('purchase_id', StoreImportValidate::$alias['purchase_id']);
        // $validate->addColumn('name', StoreImportValidate::$alias['name']);
        // $validate->addColumn('short_name', StoreImportValidate::$alias['short_name']);
        // $validate->addColumn('code', StoreImportValidate::$alias['code']);
        // $validate->addColumn('contacts', StoreImportValidate::$alias['contacts']);
        // $validate->addColumn('tel', StoreImportValidate::$alias['tel']);
        // $validate->addColumn('address_contact', StoreImportValidate::$alias['address_contact']);
        // $validate->addColumn('address_mobile', StoreImportValidate::$alias['address_mobile']);
        // $validate->addColumn('address_province', StoreImportValidate::$alias['address_province']);
        // $validate->addColumn('address_city', StoreImportValidate::$alias['address_city']);
        // $validate->addColumn('address_district', StoreImportValidate::$alias['address_district']);
        // $validate->addColumn('address_address', StoreImportValidate::$alias['address_address']);
        // $validate->addColumn('address_pathid', StoreImportValidate::$alias['address_pathid']);
        // $validate->addColumn('create_time', StoreImportValidate::$alias['create_time']);
        // $validate->addColumn('row_number', StoreImportValidate::$alias['row_number']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', StoreImportValidate::$alias['id']);
        // $validate->addColumn('app_code', StoreImportValidate::$alias['app_code']);
        // $validate->addColumn('store_owner_id', StoreImportValidate::$alias['store_owner_id']);
        // $validate->addColumn('store_owner_name', StoreImportValidate::$alias['store_owner_name']);
        // $validate->addColumn('store_center_name', StoreImportValidate::$alias['store_center_name']);
        // $validate->addColumn('store_center_id', StoreImportValidate::$alias['store_center_id']);
        // $validate->addColumn('store_purchase_name', StoreImportValidate::$alias['store_purchase_name']);
        // $validate->addColumn('store_purchase_account', StoreImportValidate::$alias['store_purchase_account']);
        // $validate->addColumn('store_depot_name', StoreImportValidate::$alias['store_depot_name']);
        // $validate->addColumn('store_depot_id', StoreImportValidate::$alias['store_depot_id']);
        // $validate->addColumn('purchase_name', StoreImportValidate::$alias['purchase_name']);
        // $validate->addColumn('purchase_id', StoreImportValidate::$alias['purchase_id']);
        // $validate->addColumn('name', StoreImportValidate::$alias['name']);
        // $validate->addColumn('short_name', StoreImportValidate::$alias['short_name']);
        // $validate->addColumn('code', StoreImportValidate::$alias['code']);
        // $validate->addColumn('contacts', StoreImportValidate::$alias['contacts']);
        // $validate->addColumn('tel', StoreImportValidate::$alias['tel']);
        // $validate->addColumn('address_contact', StoreImportValidate::$alias['address_contact']);
        // $validate->addColumn('address_mobile', StoreImportValidate::$alias['address_mobile']);
        // $validate->addColumn('address_province', StoreImportValidate::$alias['address_province']);
        // $validate->addColumn('address_city', StoreImportValidate::$alias['address_city']);
        // $validate->addColumn('address_district', StoreImportValidate::$alias['address_district']);
        // $validate->addColumn('address_address', StoreImportValidate::$alias['address_address']);
        // $validate->addColumn('address_pathid', StoreImportValidate::$alias['address_pathid']);
        // $validate->addColumn('create_time', StoreImportValidate::$alias['create_time']);
        // $validate->addColumn('row_number', StoreImportValidate::$alias['row_number']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', StoreImportValidate::$alias['id']);
        // $validate->addColumn('app_code', StoreImportValidate::$alias['app_code']);
        // $validate->addColumn('store_owner_id', StoreImportValidate::$alias['store_owner_id']);
        // $validate->addColumn('store_owner_name', StoreImportValidate::$alias['store_owner_name']);
        // $validate->addColumn('store_center_name', StoreImportValidate::$alias['store_center_name']);
        // $validate->addColumn('store_center_id', StoreImportValidate::$alias['store_center_id']);
        // $validate->addColumn('store_purchase_name', StoreImportValidate::$alias['store_purchase_name']);
        // $validate->addColumn('store_purchase_account', StoreImportValidate::$alias['store_purchase_account']);
        // $validate->addColumn('store_depot_name', StoreImportValidate::$alias['store_depot_name']);
        // $validate->addColumn('store_depot_id', StoreImportValidate::$alias['store_depot_id']);
        // $validate->addColumn('purchase_name', StoreImportValidate::$alias['purchase_name']);
        // $validate->addColumn('purchase_id', StoreImportValidate::$alias['purchase_id']);
        // $validate->addColumn('name', StoreImportValidate::$alias['name']);
        // $validate->addColumn('short_name', StoreImportValidate::$alias['short_name']);
        // $validate->addColumn('code', StoreImportValidate::$alias['code']);
        // $validate->addColumn('contacts', StoreImportValidate::$alias['contacts']);
        // $validate->addColumn('tel', StoreImportValidate::$alias['tel']);
        // $validate->addColumn('address_contact', StoreImportValidate::$alias['address_contact']);
        // $validate->addColumn('address_mobile', StoreImportValidate::$alias['address_mobile']);
        // $validate->addColumn('address_province', StoreImportValidate::$alias['address_province']);
        // $validate->addColumn('address_city', StoreImportValidate::$alias['address_city']);
        // $validate->addColumn('address_district', StoreImportValidate::$alias['address_district']);
        // $validate->addColumn('address_address', StoreImportValidate::$alias['address_address']);
        // $validate->addColumn('address_pathid', StoreImportValidate::$alias['address_pathid']);
        // $validate->addColumn('create_time', StoreImportValidate::$alias['create_time']);
        // $validate->addColumn('row_number', StoreImportValidate::$alias['row_number']);
        
        return $validate;
    }
}
