<?php
include_once "Stack.php";
$stack =new Stack();
$stack->push(3);
$stack->push(2);
$stack->push(4);
$stack->push(6);
$stack->push(10);

$stack->pop();
$stack->pop();
//$stack->pop();
$stack->pop();

echo "<pre>";
print_r($stack->getStack());
echo "<pre>";

echo "<pre>";
print_r($stack->getRevStack());
echo "<pre>";