<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
use AlgorithmPHP\BST\BST;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class BSTTest extends TestCase
{
    public function testBST()
    {
        $bst = new BST();
        // $bst->toString();

        $bst->add(12);
        $bst->add(4);
        $bst->add(45);
        $bst->add(67);
        $bst->add(34);
        $bst->add(10);

        $bst->toString();
    }
}
