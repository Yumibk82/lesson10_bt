<?php
function checkPhone_number($phone){
    $regex='/^\([0-9]{2}\)-\(0[0-9]{9}\)$/';

    if(preg_match($regex,$phone)){
        echo "Valid";
    }else echo "Invalid";
}
checkPhone_number('(84)-(0978826688)');
checkPhone_number('(8a)-(0978826688)');
checkPhone_number('(844)-(0978826688)');
checkPhone_number('(844)-(0978826688)');