<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace AlgorithmPHP\SkipList;

class Node
{
    protected ?Node $next = null;

    protected ?Node $prev = null;

    protected ?string $data = null;

    protected float $count = 0;

    /**
     * @var Level[]
     */
    protected array $levels = [];
}
