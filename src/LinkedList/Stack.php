<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace AlgorithmPHP\LinkedList;

interface Stack
{
    public function pop();

    public function push($value);

    public function peek();

    public function toString();
}
