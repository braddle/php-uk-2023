<?php

namespace Braddle\PhpUk2023\ADT;

class Stack
{

    private $count = 0;
    private $values = [];
    public function isEmpty() :bool
    {
        return !$this->count;
    }

    public function push(string $value) : void
    {
        $this->values[$this->count++] = $value;
    }

    public function count() : int
    {
        return $this->count;
    }

    public function pop() : string
    {
        return $this->values[--$this->count];
    }
}