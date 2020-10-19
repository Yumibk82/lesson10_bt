<?php
function check($sym)
{
    $stack = new SplStack();
    $stack1 = new SplStack();
    $arr = str_split($sym);

    if ($stack === NULL) {
        return true;
    }
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] === "(") {
            $stack->push($arr[$i]);
        } elseif ($arr[$i] === ")" && $stack === NULL) {
            return false;
        } elseif ($arr[$i] === ")") {
            $stack1->push($arr[$i]);
            if ($stack->bottom() === ")") {
                return false;
            }
        } elseif ($stack->count() !== $stack1->count()) {
            return false;
        }
    }

    return true;
}

var_dump(check("s * (s – a) * (s – b) * (s – c) "));