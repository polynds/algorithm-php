<?php

namespace BST;
class Node
{
    public $value;
    /** @var Node $left */
    public $left;
    /** @var Node $right */
    public $right;

    public function __construct($value = 0)
    {
        $this->value = $value;
        $this->right = null;
        $this->left = null;
    }
}