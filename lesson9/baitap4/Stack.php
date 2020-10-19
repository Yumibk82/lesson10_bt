<?php

class Stack
{
    private $arr1;
    private $arr2;

    public function __construct()
    {
        $this->arr1=array();
        $this->arr2=array();
    }
    public function push($int)
    {
        array_push($this->arr1,$int);
    }
    public function pop()
    {
        $result=array_pop($this->arr1);
        array_push($this->arr2,$result);
    }
    public function getStack()
    {
        return $this->arr1;
    }
    public function getRevStack(){
        return $this->arr2;
    }
}