<?php

class Stack{

    private $stack;

    public function __construct()
    {
        $this->stack=array();
    }

    public function convert($num)
    {
        $i=0;
        while ($num>0){
            array_push($this->stack,$num%2);
            $i++;
            $num=floor($num/2);
        }return $this->stack;
    }

    public function convertF($arr)
    {
        $binary=implode(',',$arr);
        echo $binary;
    }
}

$stack = new Stack();


print_r($stack->binaryConvert(83));
echo "<br>";

print_r($stack->Convert());
echo "<br>";