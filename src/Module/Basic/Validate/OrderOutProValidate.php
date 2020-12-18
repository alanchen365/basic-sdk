<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class OrderOutProValidate
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

        // $validate->addColumn('id', OrderOutProValidate::$alias['id']);
        // $validate->addColumn('app_code', OrderOutProValidate::$alias['app_code']);
        // $validate->addColumn('order_id', OrderOutProValidate::$alias['order_id']);
        // $validate->addColumn('product_id', OrderOutProValidate::$alias['product_id']);
        // $validate->addColumn('third_code', OrderOutProValidate::$alias['third_code']);
        // $validate->addColumn('pno', OrderOutProValidate::$alias['pno']);
        // $validate->addColumn('name', OrderOutProValidate::$alias['name']);
        // $validate->addColumn('product_unit_id', OrderOutProValidate::$alias['product_unit_id']);
        // $validate->addColumn('unit_third_code', OrderOutProValidate::$alias['unit_third_code']);
        // $validate->addColumn('guige', OrderOutProValidate::$alias['guige']);
        // $validate->addColumn('unit_name', OrderOutProValidate::$alias['unit_name']);
        // $validate->addColumn('per_unit', OrderOutProValidate::$alias['per_unit']);
        // $validate->addColumn('plan_count', OrderOutProValidate::$alias['plan_count']);
        // $validate->addColumn('count', OrderOutProValidate::$alias['count']);
        // $validate->addColumn('total_weight', OrderOutProValidate::$alias['total_weight']);
        // $validate->addColumn('total_volume', OrderOutProValidate::$alias['total_volume']);
        // $validate->addColumn('is_gift', OrderOutProValidate::$alias['is_gift']);
        // $validate->addColumn('batch_no', OrderOutProValidate::$alias['batch_no']);
        // $validate->addColumn('remark', OrderOutProValidate::$alias['remark']);
        // $validate->addColumn('supplier_id', OrderOutProValidate::$alias['supplier_id']);
        // $validate->addColumn('create_time', OrderOutProValidate::$alias['create_time']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OrderOutProValidate::$alias['id']);
        // $validate->addColumn('app_code', OrderOutProValidate::$alias['app_code']);
        // $validate->addColumn('order_id', OrderOutProValidate::$alias['order_id']);
        // $validate->addColumn('product_id', OrderOutProValidate::$alias['product_id']);
        // $validate->addColumn('third_code', OrderOutProValidate::$alias['third_code']);
        // $validate->addColumn('pno', OrderOutProValidate::$alias['pno']);
        // $validate->addColumn('name', OrderOutProValidate::$alias['name']);
        // $validate->addColumn('product_unit_id', OrderOutProValidate::$alias['product_unit_id']);
        // $validate->addColumn('unit_third_code', OrderOutProValidate::$alias['unit_third_code']);
        // $validate->addColumn('guige', OrderOutProValidate::$alias['guige']);
        // $validate->addColumn('unit_name', OrderOutProValidate::$alias['unit_name']);
        // $validate->addColumn('per_unit', OrderOutProValidate::$alias['per_unit']);
        // $validate->addColumn('plan_count', OrderOutProValidate::$alias['plan_count']);
        // $validate->addColumn('count', OrderOutProValidate::$alias['count']);
        // $validate->addColumn('total_weight', OrderOutProValidate::$alias['total_weight']);
        // $validate->addColumn('total_volume', OrderOutProValidate::$alias['total_volume']);
        // $validate->addColumn('is_gift', OrderOutProValidate::$alias['is_gift']);
        // $validate->addColumn('batch_no', OrderOutProValidate::$alias['batch_no']);
        // $validate->addColumn('remark', OrderOutProValidate::$alias['remark']);
        // $validate->addColumn('supplier_id', OrderOutProValidate::$alias['supplier_id']);
        // $validate->addColumn('create_time', OrderOutProValidate::$alias['create_time']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OrderOutProValidate::$alias['id']);
        // $validate->addColumn('app_code', OrderOutProValidate::$alias['app_code']);
        // $validate->addColumn('order_id', OrderOutProValidate::$alias['order_id']);
        // $validate->addColumn('product_id', OrderOutProValidate::$alias['product_id']);
        // $validate->addColumn('third_code', OrderOutProValidate::$alias['third_code']);
        // $validate->addColumn('pno', OrderOutProValidate::$alias['pno']);
        // $validate->addColumn('name', OrderOutProValidate::$alias['name']);
        // $validate->addColumn('product_unit_id', OrderOutProValidate::$alias['product_unit_id']);
        // $validate->addColumn('unit_third_code', OrderOutProValidate::$alias['unit_third_code']);
        // $validate->addColumn('guige', OrderOutProValidate::$alias['guige']);
        // $validate->addColumn('unit_name', OrderOutProValidate::$alias['unit_name']);
        // $validate->addColumn('per_unit', OrderOutProValidate::$alias['per_unit']);
        // $validate->addColumn('plan_count', OrderOutProValidate::$alias['plan_count']);
        // $validate->addColumn('count', OrderOutProValidate::$alias['count']);
        // $validate->addColumn('total_weight', OrderOutProValidate::$alias['total_weight']);
        // $validate->addColumn('total_volume', OrderOutProValidate::$alias['total_volume']);
        // $validate->addColumn('is_gift', OrderOutProValidate::$alias['is_gift']);
        // $validate->addColumn('batch_no', OrderOutProValidate::$alias['batch_no']);
        // $validate->addColumn('remark', OrderOutProValidate::$alias['remark']);
        // $validate->addColumn('supplier_id', OrderOutProValidate::$alias['supplier_id']);
        // $validate->addColumn('create_time', OrderOutProValidate::$alias['create_time']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OrderOutProValidate::$alias['id']);
        // $validate->addColumn('app_code', OrderOutProValidate::$alias['app_code']);
        // $validate->addColumn('order_id', OrderOutProValidate::$alias['order_id']);
        // $validate->addColumn('product_id', OrderOutProValidate::$alias['product_id']);
        // $validate->addColumn('third_code', OrderOutProValidate::$alias['third_code']);
        // $validate->addColumn('pno', OrderOutProValidate::$alias['pno']);
        // $validate->addColumn('name', OrderOutProValidate::$alias['name']);
        // $validate->addColumn('product_unit_id', OrderOutProValidate::$alias['product_unit_id']);
        // $validate->addColumn('unit_third_code', OrderOutProValidate::$alias['unit_third_code']);
        // $validate->addColumn('guige', OrderOutProValidate::$alias['guige']);
        // $validate->addColumn('unit_name', OrderOutProValidate::$alias['unit_name']);
        // $validate->addColumn('per_unit', OrderOutProValidate::$alias['per_unit']);
        // $validate->addColumn('plan_count', OrderOutProValidate::$alias['plan_count']);
        // $validate->addColumn('count', OrderOutProValidate::$alias['count']);
        // $validate->addColumn('total_weight', OrderOutProValidate::$alias['total_weight']);
        // $validate->addColumn('total_volume', OrderOutProValidate::$alias['total_volume']);
        // $validate->addColumn('is_gift', OrderOutProValidate::$alias['is_gift']);
        // $validate->addColumn('batch_no', OrderOutProValidate::$alias['batch_no']);
        // $validate->addColumn('remark', OrderOutProValidate::$alias['remark']);
        // $validate->addColumn('supplier_id', OrderOutProValidate::$alias['supplier_id']);
        // $validate->addColumn('create_time', OrderOutProValidate::$alias['create_time']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OrderOutProValidate::$alias['id']);
        // $validate->addColumn('app_code', OrderOutProValidate::$alias['app_code']);
        // $validate->addColumn('order_id', OrderOutProValidate::$alias['order_id']);
        // $validate->addColumn('product_id', OrderOutProValidate::$alias['product_id']);
        // $validate->addColumn('third_code', OrderOutProValidate::$alias['third_code']);
        // $validate->addColumn('pno', OrderOutProValidate::$alias['pno']);
        // $validate->addColumn('name', OrderOutProValidate::$alias['name']);
        // $validate->addColumn('product_unit_id', OrderOutProValidate::$alias['product_unit_id']);
        // $validate->addColumn('unit_third_code', OrderOutProValidate::$alias['unit_third_code']);
        // $validate->addColumn('guige', OrderOutProValidate::$alias['guige']);
        // $validate->addColumn('unit_name', OrderOutProValidate::$alias['unit_name']);
        // $validate->addColumn('per_unit', OrderOutProValidate::$alias['per_unit']);
        // $validate->addColumn('plan_count', OrderOutProValidate::$alias['plan_count']);
        // $validate->addColumn('count', OrderOutProValidate::$alias['count']);
        // $validate->addColumn('total_weight', OrderOutProValidate::$alias['total_weight']);
        // $validate->addColumn('total_volume', OrderOutProValidate::$alias['total_volume']);
        // $validate->addColumn('is_gift', OrderOutProValidate::$alias['is_gift']);
        // $validate->addColumn('batch_no', OrderOutProValidate::$alias['batch_no']);
        // $validate->addColumn('remark', OrderOutProValidate::$alias['remark']);
        // $validate->addColumn('supplier_id', OrderOutProValidate::$alias['supplier_id']);
        // $validate->addColumn('create_time', OrderOutProValidate::$alias['create_time']);
        
        return $validate;
    }
}
