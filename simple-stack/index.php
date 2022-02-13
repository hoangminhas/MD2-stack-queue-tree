<?php
include_once "Stack.php";


$bookShelf = new Stack(5);
$bookShelf->push('Animals Farm');
$bookShelf->push('1984');
$bookShelf->push('The Power Of Now');
$bookShelf->push('20th Century Boys Vol.1');
$bookShelf->push('Berserk Vol.1');
$bookShelf->pop();
$bookShelf->pop();
$bookShelf->pop();
echo "<pre>";
print_r($bookShelf->top());
echo "<br>";
$stmt = $bookShelf->isEmpty();
echo $stmt;


