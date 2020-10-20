<?php

function insertionSort($arr){

    for ($i=0;$i<count($arr);$i++){
        $current= $arr[$i];
    $loop=$i;
    while ($loop>0 && $arr[$loop-1]<$current){
        $arr[$loop]=$arr[$loop-1];
        $loop=$loop-1;
    }
    $arr[$loop]=$current;
    }
    return $arr;

}
$test=[5, -4, 3, 7, 2, 1, 0, 8, 9, 2];
echo "Origin array :\n";
echo implode(',',$test);
echo "\nSorted array :\n";
echo "<pre>";
echo print_r(insertionSort($test));