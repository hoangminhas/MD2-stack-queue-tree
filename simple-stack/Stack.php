<?php
include_once "Stack_Guide.php";

class Stack implements Stack_Guide
{
    public array $stack;
    public int $limit;

    public function __construct($limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($item)
    {
        // TODO: Implement push() method.
        if (count($this->stack) < $this->limit) {
            $this->stack[] = $item;
        } else {
            return "Stack is full";
        }
        return $this->stack;
    }

    public function pop()
    {
        // TODO: Implement pop() method.
        if (!empty($this->stack)) {
            array_pop($this->stack);
        } else {
            return "Stack is null";
        }
        return $this->stack;
    }

    public function top()
    {
        // TODO: Implement top() method.
        return end($this->stack);
    }

    public function isEmpty()
    {
        if (empty($this->stack)){
            return "Stack is Empty";
        } else {
            return "Not yet";
        }
        // TODO: Implement isEmpty() method.
    }

}