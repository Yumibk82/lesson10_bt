<?php
function checkClassName($class_name){
    $regex='/^C|A|P[0-9]{4,}G|H|I|K|L|M$/';
    if(preg_match($regex,$class_name)){
        echo "Valid";
    }else {
        echo "Invalid";
    }
}
checkClassName('C0318G');
echo "<br>";
checkClassName('M0318G');
echo "<br>";
checkClassName('P0323A');

