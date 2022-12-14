<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace AlgorithmPHP\LinkedList;

class ListNode
{
    public $val = 0;

    public $next;

    public function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}
