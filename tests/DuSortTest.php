<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
use AlgorithmPHP\Base\Helper;
use AlgorithmPHP\Sort\DuSort;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class DuSortTest extends TestCase
{
    public function testSort()
    {
        $arr = Helper::generateArr(10);
        Helper::printData($arr);
        // \Sort\Sort::Bubble($arr);
        // \Sort\Sort::Selection($arr);
        // \Sort\Sort::Insertion($arr);
        // \Sort\Sort::Shell($arr);
        // \Sort\Sort::Quick($arr, 0, count($arr) - 1);

        DuSort::Insert2($arr);

        Helper::printData($arr);
    }
}
