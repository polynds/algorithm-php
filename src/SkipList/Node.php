<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace AlgorithmPHP\SkipList;

class Node
{
    protected ?Node $backWard = null;

    protected ?string $data = null;

    protected float $score = 0;

    /**
     * @var Level[]
     */
    protected array $levels = [];

    public function getBackWard(): ?Node
    {
        return $this->backWard;
    }

    public function setBackWard(?Node $backWard): self
    {
        $this->backWard = $backWard;
        return $this;
    }

    public function getData(): ?string
    {
        return $this->data;
    }

    public function setData(?string $data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return float|int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param float|int $score
     */
    public function setScore($score): self
    {
        $this->score = $score;
        return $this;
    }

    /**
     * @return Level[]
     */
    public function getLevels(): array
    {
        return $this->levels;
    }

    /**
     * @param Level[] $levels
     */
    public function setLevels(array $levels): self
    {
        $this->levels = $levels;
        return $this;
    }
}
