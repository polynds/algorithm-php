<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace AlgorithmPHP\SkipList;

class SkipList
{
    public const MAX_LEVEL = 64;

    protected Node $header;

    protected ?Node $tail = null;

    protected int $length = 0;

    protected int $level = 0;

    public function __construct()
    {
        $this->createHeader();
    }

    protected function createHeader(): Node
    {
        $node = (new Node())
            ->setData('')
            ->setScore(0);
        $this->header = $node;
        $levels = $this->createAllLevels();
        $this->header->setLevels($levels);
        return $node;
    }

    protected function createAllLevels(): array
    {
        $levels = [];
        for ($index = 0; $index < self::MAX_LEVEL; ++$index) {
            $levels[$index] = (new Level())->setForWard(null)->setSpan(0);
        }

        return $levels;
    }
}
