<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class ProductSupplierValidate
{
    protected static $alias = [
        'id' => '',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'product_code' => '产品编码',
        'supplier_code' => '供应商编码',
        'supplier_name' => '供应商名称',
        'price' => '转化率为1的默认规格采购价',
        'status' => '状态',
        'create_user_name' => '创建人用户名',
        'create_user_code' => '创建人code',
        'create_time' => '创建时间',
        'update_time' => '最后更新时间',
        'delete_flg' => '是否删除',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductSupplierValidate::$alias['id']);
        // $validate->addColumn('app_code', ProductSupplierValidate::$alias['app_code']);
        // $validate->addColumn('product_code', ProductSupplierValidate::$alias['product_code']);
        // $validate->addColumn('supplier_code', ProductSupplierValidate::$alias['supplier_code']);
        // $validate->addColumn('supplier_name', ProductSupplierValidate::$alias['supplier_name']);
        // $validate->addColumn('price', ProductSupplierValidate::$alias['price']);
        // $validate->addColumn('status', ProductSupplierValidate::$alias['status']);
        // $validate->addColumn('create_user_name', ProductSupplierValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', ProductSupplierValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', ProductSupplierValidate::$alias['create_time']);
        // $validate->addColumn('update_time', ProductSupplierValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', ProductSupplierValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductSupplierValidate::$alias['id']);
        // $validate->addColumn('app_code', ProductSupplierValidate::$alias['app_code']);
        // $validate->addColumn('product_code', ProductSupplierValidate::$alias['product_code']);
        // $validate->addColumn('supplier_code', ProductSupplierValidate::$alias['supplier_code']);
        // $validate->addColumn('supplier_name', ProductSupplierValidate::$alias['supplier_name']);
        // $validate->addColumn('price', ProductSupplierValidate::$alias['price']);
        // $validate->addColumn('status', ProductSupplierValidate::$alias['status']);
        // $validate->addColumn('create_user_name', ProductSupplierValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', ProductSupplierValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', ProductSupplierValidate::$alias['create_time']);
        // $validate->addColumn('update_time', ProductSupplierValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', ProductSupplierValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductSupplierValidate::$alias['id']);
        // $validate->addColumn('app_code', ProductSupplierValidate::$alias['app_code']);
        // $validate->addColumn('product_code', ProductSupplierValidate::$alias['product_code']);
        // $validate->addColumn('supplier_code', ProductSupplierValidate::$alias['supplier_code']);
        // $validate->addColumn('supplier_name', ProductSupplierValidate::$alias['supplier_name']);
        // $validate->addColumn('price', ProductSupplierValidate::$alias['price']);
        // $validate->addColumn('status', ProductSupplierValidate::$alias['status']);
        // $validate->addColumn('create_user_name', ProductSupplierValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', ProductSupplierValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', ProductSupplierValidate::$alias['create_time']);
        // $validate->addColumn('update_time', ProductSupplierValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', ProductSupplierValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductSupplierValidate::$alias['id']);
        // $validate->addColumn('app_code', ProductSupplierValidate::$alias['app_code']);
        // $validate->addColumn('product_code', ProductSupplierValidate::$alias['product_code']);
        // $validate->addColumn('supplier_code', ProductSupplierValidate::$alias['supplier_code']);
        // $validate->addColumn('supplier_name', ProductSupplierValidate::$alias['supplier_name']);
        // $validate->addColumn('price', ProductSupplierValidate::$alias['price']);
        // $validate->addColumn('status', ProductSupplierValidate::$alias['status']);
        // $validate->addColumn('create_user_name', ProductSupplierValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', ProductSupplierValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', ProductSupplierValidate::$alias['create_time']);
        // $validate->addColumn('update_time', ProductSupplierValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', ProductSupplierValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductSupplierValidate::$alias['id']);
        // $validate->addColumn('app_code', ProductSupplierValidate::$alias['app_code']);
        // $validate->addColumn('product_code', ProductSupplierValidate::$alias['product_code']);
        // $validate->addColumn('supplier_code', ProductSupplierValidate::$alias['supplier_code']);
        // $validate->addColumn('supplier_name', ProductSupplierValidate::$alias['supplier_name']);
        // $validate->addColumn('price', ProductSupplierValidate::$alias['price']);
        // $validate->addColumn('status', ProductSupplierValidate::$alias['status']);
        // $validate->addColumn('create_user_name', ProductSupplierValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', ProductSupplierValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', ProductSupplierValidate::$alias['create_time']);
        // $validate->addColumn('update_time', ProductSupplierValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', ProductSupplierValidate::$alias['delete_flg']);
        
        return $validate;
    }
}
