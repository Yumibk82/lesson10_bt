<?php

   include_once "Patient.php";
class Queue
{
     private $listPatient;

    public function __construct()
    {
         $this->listPatient=array();
    }
    public function enqueue($name,$code)
    {
         $patient=new Patient($name,$code);
         array_push($this->listPatient,$patient);
    }
    public function dequeue()
    {
         $current=array();
         $result=array_shift($this->listPatient);
         array_push($current,$result);
         return $current;
    }
    public function sort()
    {
         function cmp($a,$b)
         {
             if ($a->code == $b->code) return 1;
             return (($a->code) > ($b->code)) ? 1 : -1;
         }
         usort($this->listPatient,"cmp");
    }
    function toString()
    {
        return $this->listPatient;
    }
}     