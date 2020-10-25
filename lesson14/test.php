<?php
function add(int $left, int $right){
    return $left+$right;
}
try{
    echo add('left','right');
}
catch (Exception $e){
    echo $e->getMessage();
}