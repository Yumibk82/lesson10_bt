<?php
include "Stack.php";

$stack = new Stack(10);

$stack->push("A");
$stack->push("B");
$stack->push("C");
$stack->push("D");
$stack->push("E");


$stack->pop();
$stack->pop();
$stack->pop();

$stack->push("1");
$stack->push("2");
$stack->isEmpty();

$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();
$stack->isEmpty();

echo "<pre>";
var_dump($stack);
