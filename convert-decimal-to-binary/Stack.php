<?php

class Stack
{
    public  $stack;
    public $limit;

    public function __construct($limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($item)
    {
        if (count($this->stack) < $this->limit) {
            return $this->stack[] = $item;
        } else {
            return 'Stack is full';
        }
    }

    public function pop()
    {
        if (!empty($this->stack)) {
            array_pop($this->stack);
        } else {
            return 'Stack is null';
        }
        return $this->stack;
    }

    public function top()
    {
        return end($this->stack);
    }

    public function isEmpty(): string
    {
        if (empty($this->stack)) {
            return "Stack is empty";
        } else {
            return 'Not yet';
        }
    }
}