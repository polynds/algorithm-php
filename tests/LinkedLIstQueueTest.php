<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
use AlgorithmPHP\LinkedList\LinkedList;
use AlgorithmPHP\LinkedList\LinkedListQueue;
use AlgorithmPHP\LinkedList\LinkedListStack;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class LinkedLIstQueueTest extends TestCase
{
    public function testLinkedList()
    {
        $linkedList = new LinkedList();
        $linkedList->toString();
        for ($i = 0; $i < 10; ++$i) {
            $linkedList->addFrist($i);
            $linkedList->toString();
        }

        $linkedList->addLast(777);
        $linkedList->toString();

        $linkedList->set(2, 666);
        $linkedList->toString();

        $linkedList->remove(2);
        $linkedList->toString();

        $linkedList->removeFrist();
        $linkedList->toString();

        $linkedList->removeLast();
        $linkedList->toString();
    }

    public function testStack()
    {
        $stack = new LinkedListStack();
        $stack->toString();
        for ($i = 0; $i < 10; ++$i) {
            $stack->push($i);
            $stack->toString();
        }

        $stack->pop();
        $stack->toString();

        $stack->pop();
        $stack->toString();

        $stack->pop();
        $stack->toString();

        $stack->pop();
        $stack->toString();

        $stack->pop();
        $stack->toString();
    }

    public function testQueue()
    {
        $stack = new LinkedListQueue();
        $stack->toString();
        for ($i = 0; $i < 10; ++$i) {
            $stack->enQueue($i);
            $stack->toString();
        }

        $stack->deQueue();
        $stack->toString();

        $stack->deQueue();
        $stack->toString();

        $stack->deQueue();
        $stack->toString();

        $stack->deQueue();
        $stack->toString();

        $stack->deQueue();
        $stack->toString();
    }
}
