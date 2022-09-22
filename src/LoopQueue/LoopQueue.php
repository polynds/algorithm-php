<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace AlgorithmPHP\LoopQueue;

class LoopQueue
{
    private $data;

    private $front;

    private $tail;

    private $size;

    public function __construct(int $capcity)
    {
        $this->data = new \SplFixedArray($capcity);
        $this->front = $this->tail = 0;
        $this->size = 0;
    }

    public function isEmpty(): bool
    {
        return $this->front === $this->tail;
    }

    public function enQueue($value)
    {
        if (($this->tail + 1) % $this->data->getSize() === $this->front) {
            $this->resize($this->data->getSize() * 2);
        }
        echo $this->front . PHP_EOL;
        echo($this->tail + 1) % $this->data->getSize() . PHP_EOL;
        echo $this->data->getSize() . '  ' . $this->tail . PHP_EOL;
        $this->data[$this->tail] = $value;
        $this->tail = ($this->tail + 1) % $this->data->getSize();
        ++$this->size;
    }

    public function deQueue()
    {
        if ($this->isEmpty()) {
            return null;
        }
        $ret = $this->data[$this->front];
        $this->data[$this->front] = null;
        $this->front = ($this->front + 1) % $this->data->getSize();
        --$this->size;
        return $ret;
    }

    public function getFront(): int
    {
        return $this->data[$this->front];
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function toString(): string
    {
        $str = 'LoopQueue size:' . $this->getSize() . ' capcity:' . $this->data->getSize() . PHP_EOL;
        $str .= 'front [';
        $str .= implode(',', $this->data->toArray());
        $str .= '] tail';
        return $str;
    }

    private function resize(int $newCapcity)
    {
        $newData = new \SplFixedArray($newCapcity);
        foreach ($this->data as $k => $v) {
            $newData[$k] = $this->data[$this->front + 1];
        }
        $this->data = $newData;
    }
}
