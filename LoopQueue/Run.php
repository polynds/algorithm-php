<?php

use Base\Helper;

require_once "../vendor/autoload.php";

$arr = Helper::generateArr(10);
$queue = new \LoopQueue\LoopQueue(10);
for ($i = 1; $i < 12; $i++) {
    $queue->enQueue($i);
    echo 'enQueue ' . ($queue->toString()) . PHP_EOL;
    if ((int)($i % 3) === 0) {
        $queue->deQueue();
        echo 'deQueue ' . ($queue->toString()) . PHP_EOL;
    }
}

