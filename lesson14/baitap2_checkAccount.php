<?php

function checkAccount($account){
    $regex='/^[_a-z0-9]{6,}$/';
    if(preg_match($regex,$account)){
        echo "Valid";
    }else echo "Invalid";
}
checkAccount('123abc_');
echo "<br>";
checkAccount('_abc123');
echo "<br>";
checkAccount('______');
echo "<br>";
checkAccount('123456');
echo "<br>";
checkAccount('abcdefg');
echo "<br>";
checkAccount('.@');
echo "<br>";
checkAccount('12345');
echo "<br>";
checkAccount('1234_');
echo "<br>";
checkAccount('abcde');