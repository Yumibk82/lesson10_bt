<?php
function findMin($arr){
    $min= $arr[0];
    for ($i=1;$i<count($arr);$i++){
        if($arr[$i]<$min){
            $min=$arr[$i];
        }
    }
    return $min;
}

function findMax($arr){
    $max=$arr[0];
    for ($i=1;$i<count($arr);$i++){
        if($arr[$i]>$max){
            $max=$arr[$i];
        }
    }
    return $max;
}

$num=[];
for ($i=0;$i<100;$i++){
    $num[$i]=rand(1,101);
}
foreach($num as $value){

    echo $value." ";
}
$minValue=findMin($num);
$maxValue=findMax($num);
echo "<br>";
echo "The mininum value is: ".$minValue;
echo "<br>";
echo "The mininum value is: ".$maxValue;