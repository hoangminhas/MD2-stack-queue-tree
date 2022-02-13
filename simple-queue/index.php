<?php
include_once "Queue.php";

$queue = new Queue();
$queue->enqueue("guest 1");
$queue->enqueue("guest 2");
$queue->enqueue("guest 3");
$queue->dequeue();
$stmt = $queue->isEmpty();
echo $stmt;
echo "<br>";
echo "<pre>";
print_r($queue);