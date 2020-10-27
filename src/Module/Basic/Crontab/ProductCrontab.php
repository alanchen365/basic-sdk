<?php

namespace App\Module\Basic\Crontab;

use EasySwoole\EasySwoole\Crontab\AbstractCronTask;
use EasySwoole\EasySwoole\Task\TaskManager;

class ProductCrontab extends AbstractCronTask
{
    /**
     * 执行规则
     */
    public static function getRule(): string
    {
        return '*/1 * * * *';
    }

    /**
     * 任务名称
     */
    public static function getTaskName(): string
    {
        return 'ProductCrontab';
    }

    public function run(int $taskId, int $workerIndex)
    {
        // TaskManager::getInstance()->async(function () {
        // var_dump(111);
        // });
    }

    /**
     * 出现异常
     */
    public function onException(\Throwable $throwable, int $taskId, int $workerIndex)
    {
        echo $throwable->getMessage();
    }
}