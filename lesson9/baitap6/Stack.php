<?php


class Queue
{

    public function __construct()
    {
    }
    function checkArray($str){
        $arr = str_split($str);

        for ($i = 0; $i < count($arr)/2; $i++) {
            if ($arr[$i] !== $arr[count($arr)-1-$i]){
                return false;
            }
        }
        return true;
    }
}
$queue = new Queue();
var_dump($queue->checkArray("able was Ih saw elba"));