<?php

function checkBracket($sym)
{
    $stack = new SplStack();
    $arr = str_split($sym);
    echo "<pre>";
    print_r($arr);
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] === "(") {
            $stack->push($arr[$i]);
        }
        else if ($arr[$i] === ")") {
            if ($stack->isEmpty()) {
                return false;
            } else {
                $stack->pop();
            }
        }
    }
    var_dump($stack);
    if($stack->isEmpty()){
        return "A";
    } else return false;
}
var_dump(checkBracket("s*s-a*s-b*s+c"));

