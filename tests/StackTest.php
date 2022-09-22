<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
use AlgorithmPHP\ArrayStack\Stack;
use AlgorithmPHP\Base\Helper;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class StackTest extends TestCase
{
    public function testFind()
    {
        $arr = Helper::generateArr(10);
        Helper::vdump(Stack::find('()[]{}'));
        Helper::vdump(Stack::find('()[{}'));
    }
}
