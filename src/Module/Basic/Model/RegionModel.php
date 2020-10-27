<?php

namespace App\Module\Basic\Model;

use Es3\Base\Model;

class RegionModel extends Model
{
    /** 数据库表名 */
    protected $tableName = 'asal_region';

    protected $autoTimeStamp = 'datetime';

    protected $createTime = 'create_time';
        
    protected $updateTime = 'update_time';
}