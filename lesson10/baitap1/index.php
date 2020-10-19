<?php
include "Dancer.php";

$man = new SplQueue();
$woman = new SplQueue();

$dancer1 = new Dancer("A1", "male");
$dancer2 = new Dancer("A2", "male");
$dancer3 = new Dancer("A3", "male");
$dancer4 = new Dancer("A4", "male");
$dancer5 = new Dancer("B1", "female");
$dancer6 = new Dancer("B2", "female");
$dancer7 = new Dancer("B3", "female");
//$dancer8= new Dancer("B4","female");
//$dancer9= new Dancer("B5","female");
//$dancer10= new Dancer("B6","female");

$man->enqueue($dancer1);
$man->enqueue($dancer2);
$man->enqueue($dancer3);
$man->enqueue($dancer4);
$woman->enqueue($dancer5);
$woman->enqueue($dancer6);
$woman->enqueue($dancer7);
//$woman->enqueue($dancer8);
//$woman->enqueue($dancer9);
//$woman->enqueue($dancer10);

function getCouple2($man, $woman)
{
    $index = 0;
    if ($man->count() == 0) {
        echo $woman->count();
    } else if ($woman->count() == 0) {
        echo $man->count();
    } else {
        echo $man->bottom()->name . "-" . $woman->bottom()->name;
        $man->offsetUnset($index);
        $woman->offsetUnset($index);
    }
}

getCouple2($man, $woman);
getCouple2($man, $woman);
getCouple2($man, $woman);
getCouple2($man, $woman);
//getCouple2($man, $woman);

