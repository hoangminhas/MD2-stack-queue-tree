<?php
include_once "../simple-stack/Stack.php";

$myStack = new Stack(5);
$rStack = new Stack(5);
$myStack->push(2);
$myStack->push(4);
$myStack->push(6);
$myStack->push(8);
$myStack->push(10);

$rStack = $myStack->pop();
var_dump($rStack);


