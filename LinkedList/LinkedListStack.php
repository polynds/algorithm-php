<?php

namespace LinkedList;
class LinkedListStack implements Stack
{

    private $stack;

    public function __construct()
    {
        $this->stack = new LinkedList();
    }

    public function pop()
    {
        return $this->stack->removeFrist();
    }

    public function push($value)
    {
        return $this->stack->addFrist($value);
    }

    public function peek()
    {
        return $this->stack->get(0);
    }

    public function toString()
    {
        $this->stack->toString();
    }
}