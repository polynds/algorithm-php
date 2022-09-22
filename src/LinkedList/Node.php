<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace AlgorithmPHP\LinkedList;

class Node
{
    public $value;

    public $next;

    public function __construct($value = null, $next = null)
    {
        $this->value = $value;
        $this->next = $next;
    }
}
