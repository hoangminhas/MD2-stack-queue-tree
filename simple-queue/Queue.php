<?php
include_once "Node.php";

class Queue
{
    public $front;
    public $back;
    public $count;

    public function __construct()
    {
        $this->front = null;
        $this->back = null;
        $this->count = 0;
    }

    public function enqueue($data)
    {
        $node = new Node($data);
        $node->next = $this->back;
        $this->back = $node;
        if (is_null($this->front)){
            $this->front = $node;
        }
        $this->count++;
    }

    public function dequeue()
    {
        $index = $this->indexOfFront();
        $current = $this->back;
        $beforeCurrent = null;
        $afterCurrent = $current->next;
        for ($i = 0; $i<=$index; $i++){
            $beforeCurrent = $current;
            $current = $current->next;
            $afterCurrent = $current->next;
        }
        $beforeCurrent->next = $afterCurrent;
        $this->count--;
    }

    public function indexOfFront()
    {
        $indexOfFront = null;
        for ($i = 0; i<$this->count; $i++){
            $indexOfFront = $i;
        }
        return $indexOfFront;
    }

    public function isEmpty()
    {
        if (is_null($this->front) && is_null($this->back)) {
            return "Queue is Empty";
        } else {
            return "Not yet!";
        }
    }


}