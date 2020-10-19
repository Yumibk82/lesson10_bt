<?php

function countValue($arr,$value)
{
    $count=0;
    for ($i=0;$i<count($arr);$i++){

        if($arr[$i]===$value){
            $count++;
        }
    }
    return $count;
}
$arr=[];
for($i=0;$i<10;$i++){
    $arr[$i]=rand(1,11);
}
echo "<pre>";
var_dump($arr);

//print_r(array_count_values($arr));
print_r(countValue($arr,3));
//
//echo "<pre>";
//$arr=[1,1,5,3,9,1,3];
//var_dump($arr);
//
//print_r(countValue($arr,3));

