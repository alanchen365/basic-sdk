<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class ProductImportValidate
{
    protected static $alias = [
        'id' => '',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'owner_code' => '货主编码',
        'pno' => '产品编号',
        'name' => '产品名称',
        'bar_code' => '条码',
        'shelf_life' => '保质期',
        'tax_rate' => '税率',
        'save_type' => '保温方式',
        'property' => '商品属性 ',
        'code_type' => '抄码类型 ',
        'guige' => '规格',
        'unit_name' => '单位',
        'per_unit' => '转换率',
        'price' => '价格',
        'grossweight' => '毛重kg',
        'netweight' => '净重kg',
        'length' => '长（厘米）',
        'width' => '宽（厘米）',
        'height' => '高（厘米）',
        'minimum' => '最小起订量',
        'minimum_type' => '起订量类型 ',
        'product_unit_status' => '规格状态',
        'product_type_code' => '类别编码',
        'supplier_code' => '供应商编码',
        'supplier_name' => '供应商名称',
        'supplier_price' => '转化率为1的默认规格采购价',
        'product_supplier_status' => '关联供应商状态',
        'create_time' => '创建时间',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductImportValidate::$alias['id']);
        // $validate->addColumn('app_code', ProductImportValidate::$alias['app_code']);
        // $validate->addColumn('owner_code', ProductImportValidate::$alias['owner_code']);
        // $validate->addColumn('pno', ProductImportValidate::$alias['pno']);
        // $validate->addColumn('name', ProductImportValidate::$alias['name']);
        // $validate->addColumn('bar_code', ProductImportValidate::$alias['bar_code']);
        // $validate->addColumn('shelf_life', ProductImportValidate::$alias['shelf_life']);
        // $validate->addColumn('tax_rate', ProductImportValidate::$alias['tax_rate']);
        // $validate->addColumn('save_type', ProductImportValidate::$alias['save_type']);
        // $validate->addColumn('property', ProductImportValidate::$alias['property']);
        // $validate->addColumn('code_type', ProductImportValidate::$alias['code_type']);
        // $validate->addColumn('guige', ProductImportValidate::$alias['guige']);
        // $validate->addColumn('unit_name', ProductImportValidate::$alias['unit_name']);
        // $validate->addColumn('per_unit', ProductImportValidate::$alias['per_unit']);
        // $validate->addColumn('price', ProductImportValidate::$alias['price']);
        // $validate->addColumn('grossweight', ProductImportValidate::$alias['grossweight']);
        // $validate->addColumn('netweight', ProductImportValidate::$alias['netweight']);
        // $validate->addColumn('length', ProductImportValidate::$alias['length']);
        // $validate->addColumn('width', ProductImportValidate::$alias['width']);
        // $validate->addColumn('height', ProductImportValidate::$alias['height']);
        // $validate->addColumn('minimum', ProductImportValidate::$alias['minimum']);
        // $validate->addColumn('minimum_type', ProductImportValidate::$alias['minimum_type']);
        // $validate->addColumn('product_unit_status', ProductImportValidate::$alias['product_unit_status']);
        // $validate->addColumn('product_type_code', ProductImportValidate::$alias['product_type_code']);
        // $validate->addColumn('supplier_code', ProductImportValidate::$alias['supplier_code']);
        // $validate->addColumn('supplier_name', ProductImportValidate::$alias['supplier_name']);
        // $validate->addColumn('supplier_price', ProductImportValidate::$alias['supplier_price']);
        // $validate->addColumn('product_supplier_status', ProductImportValidate::$alias['product_supplier_status']);
        // $validate->addColumn('create_time', ProductImportValidate::$alias['create_time']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductImportValidate::$alias['id']);
        // $validate->addColumn('app_code', ProductImportValidate::$alias['app_code']);
        // $validate->addColumn('owner_code', ProductImportValidate::$alias['owner_code']);
        // $validate->addColumn('pno', ProductImportValidate::$alias['pno']);
        // $validate->addColumn('name', ProductImportValidate::$alias['name']);
        // $validate->addColumn('bar_code', ProductImportValidate::$alias['bar_code']);
        // $validate->addColumn('shelf_life', ProductImportValidate::$alias['shelf_life']);
        // $validate->addColumn('tax_rate', ProductImportValidate::$alias['tax_rate']);
        // $validate->addColumn('save_type', ProductImportValidate::$alias['save_type']);
        // $validate->addColumn('property', ProductImportValidate::$alias['property']);
        // $validate->addColumn('code_type', ProductImportValidate::$alias['code_type']);
        // $validate->addColumn('guige', ProductImportValidate::$alias['guige']);
        // $validate->addColumn('unit_name', ProductImportValidate::$alias['unit_name']);
        // $validate->addColumn('per_unit', ProductImportValidate::$alias['per_unit']);
        // $validate->addColumn('price', ProductImportValidate::$alias['price']);
        // $validate->addColumn('grossweight', ProductImportValidate::$alias['grossweight']);
        // $validate->addColumn('netweight', ProductImportValidate::$alias['netweight']);
        // $validate->addColumn('length', ProductImportValidate::$alias['length']);
        // $validate->addColumn('width', ProductImportValidate::$alias['width']);
        // $validate->addColumn('height', ProductImportValidate::$alias['height']);
        // $validate->addColumn('minimum', ProductImportValidate::$alias['minimum']);
        // $validate->addColumn('minimum_type', ProductImportValidate::$alias['minimum_type']);
        // $validate->addColumn('product_unit_status', ProductImportValidate::$alias['product_unit_status']);
        // $validate->addColumn('product_type_code', ProductImportValidate::$alias['product_type_code']);
        // $validate->addColumn('supplier_code', ProductImportValidate::$alias['supplier_code']);
        // $validate->addColumn('supplier_name', ProductImportValidate::$alias['supplier_name']);
        // $validate->addColumn('supplier_price', ProductImportValidate::$alias['supplier_price']);
        // $validate->addColumn('product_supplier_status', ProductImportValidate::$alias['product_supplier_status']);
        // $validate->addColumn('create_time', ProductImportValidate::$alias['create_time']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductImportValidate::$alias['id']);
        // $validate->addColumn('app_code', ProductImportValidate::$alias['app_code']);
        // $validate->addColumn('owner_code', ProductImportValidate::$alias['owner_code']);
        // $validate->addColumn('pno', ProductImportValidate::$alias['pno']);
        // $validate->addColumn('name', ProductImportValidate::$alias['name']);
        // $validate->addColumn('bar_code', ProductImportValidate::$alias['bar_code']);
        // $validate->addColumn('shelf_life', ProductImportValidate::$alias['shelf_life']);
        // $validate->addColumn('tax_rate', ProductImportValidate::$alias['tax_rate']);
        // $validate->addColumn('save_type', ProductImportValidate::$alias['save_type']);
        // $validate->addColumn('property', ProductImportValidate::$alias['property']);
        // $validate->addColumn('code_type', ProductImportValidate::$alias['code_type']);
        // $validate->addColumn('guige', ProductImportValidate::$alias['guige']);
        // $validate->addColumn('unit_name', ProductImportValidate::$alias['unit_name']);
        // $validate->addColumn('per_unit', ProductImportValidate::$alias['per_unit']);
        // $validate->addColumn('price', ProductImportValidate::$alias['price']);
        // $validate->addColumn('grossweight', ProductImportValidate::$alias['grossweight']);
        // $validate->addColumn('netweight', ProductImportValidate::$alias['netweight']);
        // $validate->addColumn('length', ProductImportValidate::$alias['length']);
        // $validate->addColumn('width', ProductImportValidate::$alias['width']);
        // $validate->addColumn('height', ProductImportValidate::$alias['height']);
        // $validate->addColumn('minimum', ProductImportValidate::$alias['minimum']);
        // $validate->addColumn('minimum_type', ProductImportValidate::$alias['minimum_type']);
        // $validate->addColumn('product_unit_status', ProductImportValidate::$alias['product_unit_status']);
        // $validate->addColumn('product_type_code', ProductImportValidate::$alias['product_type_code']);
        // $validate->addColumn('supplier_code', ProductImportValidate::$alias['supplier_code']);
        // $validate->addColumn('supplier_name', ProductImportValidate::$alias['supplier_name']);
        // $validate->addColumn('supplier_price', ProductImportValidate::$alias['supplier_price']);
        // $validate->addColumn('product_supplier_status', ProductImportValidate::$alias['product_supplier_status']);
        // $validate->addColumn('create_time', ProductImportValidate::$alias['create_time']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductImportValidate::$alias['id']);
        // $validate->addColumn('app_code', ProductImportValidate::$alias['app_code']);
        // $validate->addColumn('owner_code', ProductImportValidate::$alias['owner_code']);
        // $validate->addColumn('pno', ProductImportValidate::$alias['pno']);
        // $validate->addColumn('name', ProductImportValidate::$alias['name']);
        // $validate->addColumn('bar_code', ProductImportValidate::$alias['bar_code']);
        // $validate->addColumn('shelf_life', ProductImportValidate::$alias['shelf_life']);
        // $validate->addColumn('tax_rate', ProductImportValidate::$alias['tax_rate']);
        // $validate->addColumn('save_type', ProductImportValidate::$alias['save_type']);
        // $validate->addColumn('property', ProductImportValidate::$alias['property']);
        // $validate->addColumn('code_type', ProductImportValidate::$alias['code_type']);
        // $validate->addColumn('guige', ProductImportValidate::$alias['guige']);
        // $validate->addColumn('unit_name', ProductImportValidate::$alias['unit_name']);
        // $validate->addColumn('per_unit', ProductImportValidate::$alias['per_unit']);
        // $validate->addColumn('price', ProductImportValidate::$alias['price']);
        // $validate->addColumn('grossweight', ProductImportValidate::$alias['grossweight']);
        // $validate->addColumn('netweight', ProductImportValidate::$alias['netweight']);
        // $validate->addColumn('length', ProductImportValidate::$alias['length']);
        // $validate->addColumn('width', ProductImportValidate::$alias['width']);
        // $validate->addColumn('height', ProductImportValidate::$alias['height']);
        // $validate->addColumn('minimum', ProductImportValidate::$alias['minimum']);
        // $validate->addColumn('minimum_type', ProductImportValidate::$alias['minimum_type']);
        // $validate->addColumn('product_unit_status', ProductImportValidate::$alias['product_unit_status']);
        // $validate->addColumn('product_type_code', ProductImportValidate::$alias['product_type_code']);
        // $validate->addColumn('supplier_code', ProductImportValidate::$alias['supplier_code']);
        // $validate->addColumn('supplier_name', ProductImportValidate::$alias['supplier_name']);
        // $validate->addColumn('supplier_price', ProductImportValidate::$alias['supplier_price']);
        // $validate->addColumn('product_supplier_status', ProductImportValidate::$alias['product_supplier_status']);
        // $validate->addColumn('create_time', ProductImportValidate::$alias['create_time']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductImportValidate::$alias['id']);
        // $validate->addColumn('app_code', ProductImportValidate::$alias['app_code']);
        // $validate->addColumn('owner_code', ProductImportValidate::$alias['owner_code']);
        // $validate->addColumn('pno', ProductImportValidate::$alias['pno']);
        // $validate->addColumn('name', ProductImportValidate::$alias['name']);
        // $validate->addColumn('bar_code', ProductImportValidate::$alias['bar_code']);
        // $validate->addColumn('shelf_life', ProductImportValidate::$alias['shelf_life']);
        // $validate->addColumn('tax_rate', ProductImportValidate::$alias['tax_rate']);
        // $validate->addColumn('save_type', ProductImportValidate::$alias['save_type']);
        // $validate->addColumn('property', ProductImportValidate::$alias['property']);
        // $validate->addColumn('code_type', ProductImportValidate::$alias['code_type']);
        // $validate->addColumn('guige', ProductImportValidate::$alias['guige']);
        // $validate->addColumn('unit_name', ProductImportValidate::$alias['unit_name']);
        // $validate->addColumn('per_unit', ProductImportValidate::$alias['per_unit']);
        // $validate->addColumn('price', ProductImportValidate::$alias['price']);
        // $validate->addColumn('grossweight', ProductImportValidate::$alias['grossweight']);
        // $validate->addColumn('netweight', ProductImportValidate::$alias['netweight']);
        // $validate->addColumn('length', ProductImportValidate::$alias['length']);
        // $validate->addColumn('width', ProductImportValidate::$alias['width']);
        // $validate->addColumn('height', ProductImportValidate::$alias['height']);
        // $validate->addColumn('minimum', ProductImportValidate::$alias['minimum']);
        // $validate->addColumn('minimum_type', ProductImportValidate::$alias['minimum_type']);
        // $validate->addColumn('product_unit_status', ProductImportValidate::$alias['product_unit_status']);
        // $validate->addColumn('product_type_code', ProductImportValidate::$alias['product_type_code']);
        // $validate->addColumn('supplier_code', ProductImportValidate::$alias['supplier_code']);
        // $validate->addColumn('supplier_name', ProductImportValidate::$alias['supplier_name']);
        // $validate->addColumn('supplier_price', ProductImportValidate::$alias['supplier_price']);
        // $validate->addColumn('product_supplier_status', ProductImportValidate::$alias['product_supplier_status']);
        // $validate->addColumn('create_time', ProductImportValidate::$alias['create_time']);
        
        return $validate;
    }
}
