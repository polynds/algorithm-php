<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace AlgorithmPHP\BST;

class Node
{
    public $value;

    /** @var Node */
    public $left;

    /** @var Node */
    public $right;

    public function __construct($value = 0)
    {
        $this->value = $value;
        $this->right = null;
        $this->left = null;
    }
}
