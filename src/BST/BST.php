<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace AlgorithmPHP\BST;

class BST
{
    /** @var Node */
    private $node;

    private $size;

    public function __construct()
    {
        $this->node = null;
        $this->size = 0;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function isEmpty()
    {
        return $this->size == 0;
    }

    public function add($value)
    {
        $this->node = $this->addNode($this->node, $value);
    }

    public function toString()
    {
        $this->traverse($this->node);
    }

    private function addNode($node, $value)
    {
        if ($node == null) {
            ++$this->size;
            return new Node($value);
        }

        if ($node->value > $value) {
            $node->left = $this->addNode($node->left, $value);
        } elseif ($node->value < $value) {
            $node->right = $this->addNode($node->right, $value);
        }

        return $node;
    }

    private function traverse($tidyNode)
    {
        if ($tidyNode == null) {
            echo 'null' . PHP_EOL;
            return;
        }

        echo $tidyNode->value . PHP_EOL;
        $this->traverse($tidyNode->left);
        $this->traverse($tidyNode->right);
    }
}
