<?php

namespace App\Module\Basic\Model;

use Es3\Base\Model;

class OrderOutProModel extends Model
{
    /** 数据库表名 */
    protected $tableName = 'asal_order_out_pro';

    protected $autoTimeStamp = 'datetime';

    protected $createTime = 'create_time';
        
}