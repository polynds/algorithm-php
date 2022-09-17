<?php

namespace LinkedList;

interface Queue
{
    public function enQueue($vaule);
    public function deQueue();
    public function isEmpty();
    public function getFront();
    public function getBack();
    public function toString();

}