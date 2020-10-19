<?php

include_once "Node.php";
include_once "Queue.php";

$queue= new Queue();
$queue->enqueue("A");
$queue->enqueue("B");
$queue->enqueue("C");

//$queue->dequeue();
//$queue->dequeue();
//$queue->dequeue();

//$queue->isEmpty();

//$queue->enqueue("A");
//$queue->enqueue("B");

//$queue->dequeue();
//$queue->dequeue();
//$queue->dequeue();

//$queue->isEmpty();

echo "<pre>";
var_dump($queue);