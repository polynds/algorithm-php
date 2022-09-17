<?php

namespace LinkedList;

require_once "../vendor/autoload.php";

$stack = new LinkedListStack();
$stack->toString();
for ($i=0;$i<10;$i++){
    $stack->push($i);
    $stack->toString();
}

$stack->pop();
$stack->toString();

$stack->pop();
$stack->toString();

$stack->pop();
$stack->toString();

$stack->pop();
$stack->toString();

$stack->pop();
$stack->toString();