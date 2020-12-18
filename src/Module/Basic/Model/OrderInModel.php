<?php

namespace App\Module\Basic\Model;

use Es3\Base\Model;

class OrderInModel extends Model
{
    /** 数据库表名 */
    protected $tableName = 'asal_order_in';

    protected $autoTimeStamp = 'datetime';

    protected $createTime = 'create_time';
        
    protected $updateTime = 'update_time';
}