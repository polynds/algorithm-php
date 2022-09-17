<?php

namespace BST;

require_once "../vendor/autoload.php";

$bst = new BST();
//$bst->toString();

$bst->add(12);
$bst->add(4);
$bst->add(45);
$bst->add(67);
$bst->add(34);
$bst->add(10);

$bst->toString();