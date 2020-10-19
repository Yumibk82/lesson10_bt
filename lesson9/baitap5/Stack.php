<?php


class Stack
{

    private $stack;

    public function __construct()
    {
        $this->stack=array();
    }

    public function binaryConvert($number)
    {
        $i=0;
        while ($number>0){
            array_push($this->stack,($number%2));
            $i++;
            $number=floor($number/2);
        }return $this->stack;
    }

    public function convert()
    {
        $binary=implode('',array_reverse($this->stack));
        return $binary;
    }
}