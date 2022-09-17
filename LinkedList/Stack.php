<?php
namespace LinkedList;

interface Stack{
    public function pop();
    public function push($value);
    public function peek();
    public function toString();
}