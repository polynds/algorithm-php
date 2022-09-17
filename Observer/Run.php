<?php

namespace LinkedList;

require_once "../vendor/autoload.php";

$linkedList = new LinkedList();
$linkedList->toString();
for ($i=0;$i<10;$i++){
    $linkedList->addFrist($i);
    $linkedList->toString();
}

$linkedList->addLast(777);
$linkedList->toString();

$linkedList->set(2,666);
$linkedList->toString();


$linkedList->remove(2);
$linkedList->toString();

$linkedList->removeFrist();
$linkedList->toString();

$linkedList->removeLast();
$linkedList->toString();