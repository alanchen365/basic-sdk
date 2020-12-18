<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class OrderInProValidate
{
    protected static $alias = [
        'id' => '',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'order_id' => '订单号',
        'product_id' => '产品id',
        'third_code' => '第三方产品id',
        'pno' => '产品编号',
        'name' => '产品名称',
        'product_unit_id' => '产品规格id',
        'unit_third_code' => '第三方产品规格id',
        'guige' => '规格',
        'unit_name' => '单位',
        'per_unit' => '单位转换率',
        'plan_count' => '计划数量',
        'count' => '数量',
        'total_weight' => '总重量',
        'total_volume' => '总体积 ㎡',
        'is_gift' => '是否赠品',
        'batch_no' => '批次号',
        'remark' => '产品备注',
        'supplier_id' => '供应商id',
        'create_time' => '创建时间',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OrderInProValidate::$alias['id']);
        // $validate->addColumn('app_code', OrderInProValidate::$alias['app_code']);
        // $validate->addColumn('order_id', OrderInProValidate::$alias['order_id']);
        // $validate->addColumn('product_id', OrderInProValidate::$alias['product_id']);
        // $validate->addColumn('third_code', OrderInProValidate::$alias['third_code']);
        // $validate->addColumn('pno', OrderInProValidate::$alias['pno']);
        // $validate->addColumn('name', OrderInProValidate::$alias['name']);
        // $validate->addColumn('product_unit_id', OrderInProValidate::$alias['product_unit_id']);
        // $validate->addColumn('unit_third_code', OrderInProValidate::$alias['unit_third_code']);
        // $validate->addColumn('guige', OrderInProValidate::$alias['guige']);
        // $validate->addColumn('unit_name', OrderInProValidate::$alias['unit_name']);
        // $validate->addColumn('per_unit', OrderInProValidate::$alias['per_unit']);
        // $validate->addColumn('plan_count', OrderInProValidate::$alias['plan_count']);
        // $validate->addColumn('count', OrderInProValidate::$alias['count']);
        // $validate->addColumn('total_weight', OrderInProValidate::$alias['total_weight']);
        // $validate->addColumn('total_volume', OrderInProValidate::$alias['total_volume']);
        // $validate->addColumn('is_gift', OrderInProValidate::$alias['is_gift']);
        // $validate->addColumn('batch_no', OrderInProValidate::$alias['batch_no']);
        // $validate->addColumn('remark', OrderInProValidate::$alias['remark']);
        // $validate->addColumn('supplier_id', OrderInProValidate::$alias['supplier_id']);
        // $validate->addColumn('create_time', OrderInProValidate::$alias['create_time']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OrderInProValidate::$alias['id']);
        // $validate->addColumn('app_code', OrderInProValidate::$alias['app_code']);
        // $validate->addColumn('order_id', OrderInProValidate::$alias['order_id']);
        // $validate->addColumn('product_id', OrderInProValidate::$alias['product_id']);
        // $validate->addColumn('third_code', OrderInProValidate::$alias['third_code']);
        // $validate->addColumn('pno', OrderInProValidate::$alias['pno']);
        // $validate->addColumn('name', OrderInProValidate::$alias['name']);
        // $validate->addColumn('product_unit_id', OrderInProValidate::$alias['product_unit_id']);
        // $validate->addColumn('unit_third_code', OrderInProValidate::$alias['unit_third_code']);
        // $validate->addColumn('guige', OrderInProValidate::$alias['guige']);
        // $validate->addColumn('unit_name', OrderInProValidate::$alias['unit_name']);
        // $validate->addColumn('per_unit', OrderInProValidate::$alias['per_unit']);
        // $validate->addColumn('plan_count', OrderInProValidate::$alias['plan_count']);
        // $validate->addColumn('count', OrderInProValidate::$alias['count']);
        // $validate->addColumn('total_weight', OrderInProValidate::$alias['total_weight']);
        // $validate->addColumn('total_volume', OrderInProValidate::$alias['total_volume']);
        // $validate->addColumn('is_gift', OrderInProValidate::$alias['is_gift']);
        // $validate->addColumn('batch_no', OrderInProValidate::$alias['batch_no']);
        // $validate->addColumn('remark', OrderInProValidate::$alias['remark']);
        // $validate->addColumn('supplier_id', OrderInProValidate::$alias['supplier_id']);
        // $validate->addColumn('create_time', OrderInProValidate::$alias['create_time']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OrderInProValidate::$alias['id']);
        // $validate->addColumn('app_code', OrderInProValidate::$alias['app_code']);
        // $validate->addColumn('order_id', OrderInProValidate::$alias['order_id']);
        // $validate->addColumn('product_id', OrderInProValidate::$alias['product_id']);
        // $validate->addColumn('third_code', OrderInProValidate::$alias['third_code']);
        // $validate->addColumn('pno', OrderInProValidate::$alias['pno']);
        // $validate->addColumn('name', OrderInProValidate::$alias['name']);
        // $validate->addColumn('product_unit_id', OrderInProValidate::$alias['product_unit_id']);
        // $validate->addColumn('unit_third_code', OrderInProValidate::$alias['unit_third_code']);
        // $validate->addColumn('guige', OrderInProValidate::$alias['guige']);
        // $validate->addColumn('unit_name', OrderInProValidate::$alias['unit_name']);
        // $validate->addColumn('per_unit', OrderInProValidate::$alias['per_unit']);
        // $validate->addColumn('plan_count', OrderInProValidate::$alias['plan_count']);
        // $validate->addColumn('count', OrderInProValidate::$alias['count']);
        // $validate->addColumn('total_weight', OrderInProValidate::$alias['total_weight']);
        // $validate->addColumn('total_volume', OrderInProValidate::$alias['total_volume']);
        // $validate->addColumn('is_gift', OrderInProValidate::$alias['is_gift']);
        // $validate->addColumn('batch_no', OrderInProValidate::$alias['batch_no']);
        // $validate->addColumn('remark', OrderInProValidate::$alias['remark']);
        // $validate->addColumn('supplier_id', OrderInProValidate::$alias['supplier_id']);
        // $validate->addColumn('create_time', OrderInProValidate::$alias['create_time']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OrderInProValidate::$alias['id']);
        // $validate->addColumn('app_code', OrderInProValidate::$alias['app_code']);
        // $validate->addColumn('order_id', OrderInProValidate::$alias['order_id']);
        // $validate->addColumn('product_id', OrderInProValidate::$alias['product_id']);
        // $validate->addColumn('third_code', OrderInProValidate::$alias['third_code']);
        // $validate->addColumn('pno', OrderInProValidate::$alias['pno']);
        // $validate->addColumn('name', OrderInProValidate::$alias['name']);
        // $validate->addColumn('product_unit_id', OrderInProValidate::$alias['product_unit_id']);
        // $validate->addColumn('unit_third_code', OrderInProValidate::$alias['unit_third_code']);
        // $validate->addColumn('guige', OrderInProValidate::$alias['guige']);
        // $validate->addColumn('unit_name', OrderInProValidate::$alias['unit_name']);
        // $validate->addColumn('per_unit', OrderInProValidate::$alias['per_unit']);
        // $validate->addColumn('plan_count', OrderInProValidate::$alias['plan_count']);
        // $validate->addColumn('count', OrderInProValidate::$alias['count']);
        // $validate->addColumn('total_weight', OrderInProValidate::$alias['total_weight']);
        // $validate->addColumn('total_volume', OrderInProValidate::$alias['total_volume']);
        // $validate->addColumn('is_gift', OrderInProValidate::$alias['is_gift']);
        // $validate->addColumn('batch_no', OrderInProValidate::$alias['batch_no']);
        // $validate->addColumn('remark', OrderInProValidate::$alias['remark']);
        // $validate->addColumn('supplier_id', OrderInProValidate::$alias['supplier_id']);
        // $validate->addColumn('create_time', OrderInProValidate::$alias['create_time']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OrderInProValidate::$alias['id']);
        // $validate->addColumn('app_code', OrderInProValidate::$alias['app_code']);
        // $validate->addColumn('order_id', OrderInProValidate::$alias['order_id']);
        // $validate->addColumn('product_id', OrderInProValidate::$alias['product_id']);
        // $validate->addColumn('third_code', OrderInProValidate::$alias['third_code']);
        // $validate->addColumn('pno', OrderInProValidate::$alias['pno']);
        // $validate->addColumn('name', OrderInProValidate::$alias['name']);
        // $validate->addColumn('product_unit_id', OrderInProValidate::$alias['product_unit_id']);
        // $validate->addColumn('unit_third_code', OrderInProValidate::$alias['unit_third_code']);
        // $validate->addColumn('guige', OrderInProValidate::$alias['guige']);
        // $validate->addColumn('unit_name', OrderInProValidate::$alias['unit_name']);
        // $validate->addColumn('per_unit', OrderInProValidate::$alias['per_unit']);
        // $validate->addColumn('plan_count', OrderInProValidate::$alias['plan_count']);
        // $validate->addColumn('count', OrderInProValidate::$alias['count']);
        // $validate->addColumn('total_weight', OrderInProValidate::$alias['total_weight']);
        // $validate->addColumn('total_volume', OrderInProValidate::$alias['total_volume']);
        // $validate->addColumn('is_gift', OrderInProValidate::$alias['is_gift']);
        // $validate->addColumn('batch_no', OrderInProValidate::$alias['batch_no']);
        // $validate->addColumn('remark', OrderInProValidate::$alias['remark']);
        // $validate->addColumn('supplier_id', OrderInProValidate::$alias['supplier_id']);
        // $validate->addColumn('create_time', OrderInProValidate::$alias['create_time']);
        
        return $validate;
    }
}
