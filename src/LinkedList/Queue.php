<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace AlgorithmPHP\LinkedList;

interface Queue
{
    public function enQueue($vaule);

    public function deQueue();

    public function isEmpty();

    public function getFront();

    public function getBack();

    public function toString();
}
