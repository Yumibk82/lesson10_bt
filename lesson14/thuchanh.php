<?php
//$regexp='/^[A-Z]/';

//function isFirstLetterUpperCase($str){
//    $regexp='/^[A-Z]/';
//    if(preg_match($regexp,$str)){
//        echo " String's first character is uppercase";
//    }else{
//        echo "String's first character is not uppercase";
//    }
//}
//isFirstLetterUpperCase('Codegym');
//echo "<br>";
//isFirstLetterUpperCase('codegym');

function isFirstLetterUpper($str1){
    $regex='/^[A-Z]/';
}


function isUpperCase($str2){
    $regex='/[A-Z]/';
    if(preg_match($regex,$str2)){
        echo "OK";
    }else "NG";
}
isUpperCase('NGUYEN VAN NAM');