<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace AlgorithmPHP\LinkedList;

class LinkedList
{
    /** @var Node */
    private $dunmyHead;

    private $size = 0;

    public function __construct()
    {
        $this->dunmyHead = new Node();
        $this->size = 0;
    }

    public function add(int $index, $value)
    {
        $prev = $this->dunmyHead;
        for ($i = 0; $i < $index; ++$i) {
            $prev = $prev->next;
        }

        $newNode = new Node($value, $prev->next);
        $prev->next = $newNode;
        ++$this->size;
        return $newNode;
    }

    public function addFrist($value)
    {
        return $this->add(0, $value);
    }

    public function addLast($value)
    {
        return $this->add($this->size, $value);
    }

    public function remove(int $index)
    {
        if ($index > $this->size || $index < 0) {
            throw new \Exception('索引越界了,size:' . $this->size . '-$index:' . $index);
        }

        $prev = $this->dunmyHead;
        for ($i = 0; $i < $index; ++$i) {
            $prev = $prev->next;
        }

        $retNode = $prev->next;
        $prev->next = $retNode->next;
        $retNode->next = null;
        --$this->size;
        return $retNode->value;
    }

    public function removeFrist()
    {
        return $this->remove(0);
    }

    public function removeLast()
    {
        return $this->remove($this->size - 1);
    }

    public function set(int $index, $value)
    {
        if ($index > $this->size || $index <= 0) {
            throw new \Exception('索引越界了');
        }

        $prev = $this->dunmyHead;
        for ($i = 0; $i < $index; ++$i) {
            $prev = $prev->next;
        }

        $cur = $prev->next;
        $cur->value = $value;
    }

    public function get(int $index)
    {
        if ($index > $this->size || $index <= 0) {
            throw new \Exception('索引越界了');
        }

        $prev = $this->dunmyHead;
        for ($i = 0; $i < $index; ++$i) {
            $prev = $prev->next;
        }
        return $prev->next->value;
    }

    public function toString()
    {
        $str = '';
        $cur = $this->dunmyHead;
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

    public function getSize(): int
    {
        return $this->size;
    }
}
