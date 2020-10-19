<?php

function checkBracket($sym)
{
    $stack = new SplStack();
    $arr = str_split($sym);

    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == "(") {
            $stack->push($arr[$i]);
        }
        if ($arr[$i] == ")") {
            if ($stack == null) {
                return false;
            } else {
                $stack->bottom();
            }
        }
    }
    if($stack==null){
        return true;
    } return false;
}
var_dump(checkBracket("s * (s – a) * (s – b) * (s – c)"));

