<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace AlgorithmPHP\SkipList;

class Level
{
    protected ?Node $forWard = null;

    protected int $span = 0;

    public function getForWard(): ?Node
    {
        return $this->forWard;
    }

    public function setForWard(?Node $forWard): self
    {
        $this->forWard = $forWard;
        return $this;
    }

    public function getSpan(): int
    {
        return $this->span;
    }

    public function setSpan(int $span): self
    {
        $this->span = $span;
        return $this;
    }
}
