<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class OrderInValidate
{
    protected static $alias = [
        'id' => '',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'order_id' => '订单号',
        'third_no' => '三方单号',
        'owner_id' => '货主ID',
        'depot_id' => '仓库id',
        'order_type' => '三方订单类型',
        'status' => '状态',
        'tradefrom' => '下单方式',
        'pay_mode' => '结算方式',
        'use_flg' => '使用状态 1 物流+仓库， 3仓库',
        'weight' => '总重量kg',
        'volume' => '总体积㎡',
        'whole' => '整',
        'bulk' => '散',
        'remark' => '备注',
        'send_time' => '发车时间',
        'complete_time' => '完成时间',
        'verification' => '核销时间',
        'create_user_name' => '创建人用户名',
        'create_user_code' => '创建人code',
        'create_time' => '创建时间',
        'update_time' => '最后更新时间',
        'delete_flg' => '是否删除',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OrderInValidate::$alias['id']);
        // $validate->addColumn('app_code', OrderInValidate::$alias['app_code']);
        // $validate->addColumn('order_id', OrderInValidate::$alias['order_id']);
        // $validate->addColumn('third_no', OrderInValidate::$alias['third_no']);
        // $validate->addColumn('owner_id', OrderInValidate::$alias['owner_id']);
        // $validate->addColumn('depot_id', OrderInValidate::$alias['depot_id']);
        // $validate->addColumn('order_type', OrderInValidate::$alias['order_type']);
        // $validate->addColumn('status', OrderInValidate::$alias['status']);
        // $validate->addColumn('tradefrom', OrderInValidate::$alias['tradefrom']);
        // $validate->addColumn('pay_mode', OrderInValidate::$alias['pay_mode']);
        // $validate->addColumn('use_flg', OrderInValidate::$alias['use_flg']);
        // $validate->addColumn('weight', OrderInValidate::$alias['weight']);
        // $validate->addColumn('volume', OrderInValidate::$alias['volume']);
        // $validate->addColumn('whole', OrderInValidate::$alias['whole']);
        // $validate->addColumn('bulk', OrderInValidate::$alias['bulk']);
        // $validate->addColumn('remark', OrderInValidate::$alias['remark']);
        // $validate->addColumn('send_time', OrderInValidate::$alias['send_time']);
        // $validate->addColumn('complete_time', OrderInValidate::$alias['complete_time']);
        // $validate->addColumn('verification', OrderInValidate::$alias['verification']);
        // $validate->addColumn('create_user_name', OrderInValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', OrderInValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', OrderInValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OrderInValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', OrderInValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OrderInValidate::$alias['id']);
        // $validate->addColumn('app_code', OrderInValidate::$alias['app_code']);
        // $validate->addColumn('order_id', OrderInValidate::$alias['order_id']);
        // $validate->addColumn('third_no', OrderInValidate::$alias['third_no']);
        // $validate->addColumn('owner_id', OrderInValidate::$alias['owner_id']);
        // $validate->addColumn('depot_id', OrderInValidate::$alias['depot_id']);
        // $validate->addColumn('order_type', OrderInValidate::$alias['order_type']);
        // $validate->addColumn('status', OrderInValidate::$alias['status']);
        // $validate->addColumn('tradefrom', OrderInValidate::$alias['tradefrom']);
        // $validate->addColumn('pay_mode', OrderInValidate::$alias['pay_mode']);
        // $validate->addColumn('use_flg', OrderInValidate::$alias['use_flg']);
        // $validate->addColumn('weight', OrderInValidate::$alias['weight']);
        // $validate->addColumn('volume', OrderInValidate::$alias['volume']);
        // $validate->addColumn('whole', OrderInValidate::$alias['whole']);
        // $validate->addColumn('bulk', OrderInValidate::$alias['bulk']);
        // $validate->addColumn('remark', OrderInValidate::$alias['remark']);
        // $validate->addColumn('send_time', OrderInValidate::$alias['send_time']);
        // $validate->addColumn('complete_time', OrderInValidate::$alias['complete_time']);
        // $validate->addColumn('verification', OrderInValidate::$alias['verification']);
        // $validate->addColumn('create_user_name', OrderInValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', OrderInValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', OrderInValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OrderInValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', OrderInValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OrderInValidate::$alias['id']);
        // $validate->addColumn('app_code', OrderInValidate::$alias['app_code']);
        // $validate->addColumn('order_id', OrderInValidate::$alias['order_id']);
        // $validate->addColumn('third_no', OrderInValidate::$alias['third_no']);
        // $validate->addColumn('owner_id', OrderInValidate::$alias['owner_id']);
        // $validate->addColumn('depot_id', OrderInValidate::$alias['depot_id']);
        // $validate->addColumn('order_type', OrderInValidate::$alias['order_type']);
        // $validate->addColumn('status', OrderInValidate::$alias['status']);
        // $validate->addColumn('tradefrom', OrderInValidate::$alias['tradefrom']);
        // $validate->addColumn('pay_mode', OrderInValidate::$alias['pay_mode']);
        // $validate->addColumn('use_flg', OrderInValidate::$alias['use_flg']);
        // $validate->addColumn('weight', OrderInValidate::$alias['weight']);
        // $validate->addColumn('volume', OrderInValidate::$alias['volume']);
        // $validate->addColumn('whole', OrderInValidate::$alias['whole']);
        // $validate->addColumn('bulk', OrderInValidate::$alias['bulk']);
        // $validate->addColumn('remark', OrderInValidate::$alias['remark']);
        // $validate->addColumn('send_time', OrderInValidate::$alias['send_time']);
        // $validate->addColumn('complete_time', OrderInValidate::$alias['complete_time']);
        // $validate->addColumn('verification', OrderInValidate::$alias['verification']);
        // $validate->addColumn('create_user_name', OrderInValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', OrderInValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', OrderInValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OrderInValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', OrderInValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OrderInValidate::$alias['id']);
        // $validate->addColumn('app_code', OrderInValidate::$alias['app_code']);
        // $validate->addColumn('order_id', OrderInValidate::$alias['order_id']);
        // $validate->addColumn('third_no', OrderInValidate::$alias['third_no']);
        // $validate->addColumn('owner_id', OrderInValidate::$alias['owner_id']);
        // $validate->addColumn('depot_id', OrderInValidate::$alias['depot_id']);
        // $validate->addColumn('order_type', OrderInValidate::$alias['order_type']);
        // $validate->addColumn('status', OrderInValidate::$alias['status']);
        // $validate->addColumn('tradefrom', OrderInValidate::$alias['tradefrom']);
        // $validate->addColumn('pay_mode', OrderInValidate::$alias['pay_mode']);
        // $validate->addColumn('use_flg', OrderInValidate::$alias['use_flg']);
        // $validate->addColumn('weight', OrderInValidate::$alias['weight']);
        // $validate->addColumn('volume', OrderInValidate::$alias['volume']);
        // $validate->addColumn('whole', OrderInValidate::$alias['whole']);
        // $validate->addColumn('bulk', OrderInValidate::$alias['bulk']);
        // $validate->addColumn('remark', OrderInValidate::$alias['remark']);
        // $validate->addColumn('send_time', OrderInValidate::$alias['send_time']);
        // $validate->addColumn('complete_time', OrderInValidate::$alias['complete_time']);
        // $validate->addColumn('verification', OrderInValidate::$alias['verification']);
        // $validate->addColumn('create_user_name', OrderInValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', OrderInValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', OrderInValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OrderInValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', OrderInValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OrderInValidate::$alias['id']);
        // $validate->addColumn('app_code', OrderInValidate::$alias['app_code']);
        // $validate->addColumn('order_id', OrderInValidate::$alias['order_id']);
        // $validate->addColumn('third_no', OrderInValidate::$alias['third_no']);
        // $validate->addColumn('owner_id', OrderInValidate::$alias['owner_id']);
        // $validate->addColumn('depot_id', OrderInValidate::$alias['depot_id']);
        // $validate->addColumn('order_type', OrderInValidate::$alias['order_type']);
        // $validate->addColumn('status', OrderInValidate::$alias['status']);
        // $validate->addColumn('tradefrom', OrderInValidate::$alias['tradefrom']);
        // $validate->addColumn('pay_mode', OrderInValidate::$alias['pay_mode']);
        // $validate->addColumn('use_flg', OrderInValidate::$alias['use_flg']);
        // $validate->addColumn('weight', OrderInValidate::$alias['weight']);
        // $validate->addColumn('volume', OrderInValidate::$alias['volume']);
        // $validate->addColumn('whole', OrderInValidate::$alias['whole']);
        // $validate->addColumn('bulk', OrderInValidate::$alias['bulk']);
        // $validate->addColumn('remark', OrderInValidate::$alias['remark']);
        // $validate->addColumn('send_time', OrderInValidate::$alias['send_time']);
        // $validate->addColumn('complete_time', OrderInValidate::$alias['complete_time']);
        // $validate->addColumn('verification', OrderInValidate::$alias['verification']);
        // $validate->addColumn('create_user_name', OrderInValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', OrderInValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', OrderInValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OrderInValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', OrderInValidate::$alias['delete_flg']);
        
        return $validate;
    }
}
