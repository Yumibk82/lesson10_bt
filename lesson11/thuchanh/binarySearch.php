<?php
function binarySearch($arr,$int)
{
    $low = 0;
    $hight = count($arr) - 1;
    while ($low <=$hight) {
        $mid = (($low + $hight) / 2);
    if ($arr[$mid] > $int) {
        $hight = $mid - 1;
    } else if ($arr[$mid] < $int) {
        $low = $mid + 1;
    } else {
        return true;
    }
}
return false;
}

$arr=range(1,10,1);
$int=10;
echo "<pre>";
var_dump($arr);
if(binarySearch($arr,$int)!==false){
    echo "$int.found out";
}else {
    echo "$int.not found";
}