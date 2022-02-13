<?php

class Node
{
    private $value;
    public $next;

    public function __construct($data)
    {
        $this->value = $data;
        $this->next = null;
    }

    public function readData()
    {
        return $this->value;
    }
}