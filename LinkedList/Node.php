<?php

namespace LinkedList;

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