<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
use AlgorithmPHP\LoopQueue\LoopQueue;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class LoopQueueTest extends TestCase
{
    public function testLoopQueue()
    {
        $queue = new LoopQueue(10);
        for ($i = 1; $i < 12; ++$i) {
            $queue->enQueue($i);
            echo 'enQueue ' . ($queue->toString()) . PHP_EOL;
            if ((int) ($i % 3) === 0) {
                $queue->deQueue();
                echo 'deQueue ' . ($queue->toString()) . PHP_EOL;
            }
        }
    }
}
