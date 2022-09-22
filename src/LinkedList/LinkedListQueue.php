<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace AlgorithmPHP\LinkedList;

class LinkedListQueue implements Queue
{
    private $head;

    private $tail;

    private $size;

    public function __construct()
    {
        $this->head = null;
        $this->tail = null;
        $this->size = 0;
    }

    public function enQueue($vaule)
    {
        if ($this->tail == null) {
            $this->tail = new Node($vaule);
            $this->head = $this->tail;
        } else {
            $this->tail->next = new Node($vaule);
            $this->tail = $this->tail->next;
        }
        ++$this->size;
    }

    public function deQueue()
    {
        $retNode = $this->head;
        $this->head = $this->head->next;
        $retNode->next = null;
        if ($this->head == null) {
            $this->tail = null;
        }
        --$this->size;
    }

    public function isEmpty()
    {
        return $this->size == 0;
    }

    public function getFront()
    {
        return $this->head->value;
    }

    public function getBack()
    {
        return $this->tail->value;
    }

    public function toString()
    {
        $str = '';
        $cur = $this->head;
        while ($cur !== null) {
            if ($cur->value !== null) {
                $str .= $cur->value . '->';
            }
            $cur = $cur->next;
        }
        if (! empty($str)) {
            $str .= 'null';
        }

        echo $str . PHP_EOL;
    }
}
