<?php

//include_once "Node.php";
class Queue
{
    public $font=null;
    public $back=null;

    public function isEmpty()
    {
        return $this->font=null;
    }
    public function enqueue($value)
    {
        $oldBack = new Node();
        $oldBack->value=$value;
        if($this->isEmpty()){
            $this->font=$this->back;
        }else{
            $oldBack->next=$this->back;
        }
    }

    public function dequeue()
    {
        if($this->isEmpty()){
            return null;
        }
        $removeValue=$this->font->value;
        $this->font=$this->font->next;
        return $removeValue;
    }
}