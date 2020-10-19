<?php

function binarySearch(array $arr,$int){
    $low=0;
    $high=count($arr)-1;
    while ($low<=$high){
        $mid=($low+$high)/2;
        if($arr[$mid]>$int){
            $high=$mid-1;
        }else if($arr[$mid]<$int){
            $low=$mid+1;
        }else{
            return TRUE;
        }
    }
    return FALSE;
}
$arr= range(1,100,3);
$int=18;
if(binarySearch($arr,$int)!==FALSE){
    echo $int. 'found out\n';
}else {
    echo $int.' not found\n';
}
$int=101;
if(binarySearch($arr,$int)!==FALSE){
    echo $int. 'found out\n';
}else {
    echo $int.' not found\n';
}