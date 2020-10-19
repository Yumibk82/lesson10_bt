<?php
include_once "Patient.php";
include_once "Queue.php";

$queue = new Queue();
$queued= new Queue();

$queue->enqueue("Smith",5);
$queue->enqueue("Jones",4);
$queue->enqueue("Fehrenbach",6);
$queue->enqueue("Brown",1);
$queue->enqueue("Ingram",1);

echo "<pre>";
print_r($queue->toString());
echo "<pre>";

$queue->sort();
echo "<pre>";
var_dump($queue);

print_r($queue->dequeue());

//echo "<pre>";
//var_dump($queue);

$queue->dequeue();
$queue->dequeue();
$queue->dequeue();

print_r($this->current->dequeue());
//
//
//echo "<pre>";
//print_r($queue->toString());
//echo "<pre>";