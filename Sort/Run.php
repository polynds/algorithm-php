<?php

use Base\Helper;

require_once "../vendor/autoload.php";

$arr = Helper::generateArr(10);
Helper::printData($arr);
//\Sort\Sort::Bubble($arr);
//\Sort\Sort::Selection($arr);
//\Sort\Sort::Insertion($arr);
//\Sort\Sort::Shell($arr);
//\Sort\Sort::Quick($arr, 0, count($arr) - 1);


\Sort\DuSort::Insert2($arr);

Helper::printData($arr);
