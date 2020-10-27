<?php

namespace App\Module\Basic\Model;

use Es3\Base\Model;

class ProductImportModel extends Model
{
    /** 数据库表名 */
    protected $tableName = 'asal_product_import';

    protected $autoTimeStamp = 'datetime';

    protected $createTime = 'create_time';
        
}