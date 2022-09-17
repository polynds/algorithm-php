<?php

namespace LinkedList;

require_once "../vendor/autoload.php";

$stack = new LinkedLIstQueue();
$stack->toString();
for ($i=0;$i<10;$i++){
    $stack->enQueue($i);
    $stack->toString();
}

$stack->deQueue();
$stack->toString();

$stack->deQueue();
$stack->toString();

$stack->deQueue();
$stack->toString();

$stack->deQueue();
$stack->toString();

$stack->deQueue();
$stack->toString();