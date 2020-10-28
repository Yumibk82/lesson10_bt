<?php


namespace App\model;


class Student
{
    protected $id;
    protected $name;
    protected $dob;
    protected $address;
    protected $gender;

    public function __construct($name, $dob, $address, $gender)
    {
        $this->name = $name;
        $this->dob = $dob;
        $this->address = $address;
        $this->gender = $gender;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getDob()
    {
        return $this->dob;
    }
    public function setDob($dob)
    {
        $this->dob = $dob;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function setAddress($address)
    {
        $this->address = $address;
    }
    public function getGender()
    {
        return $this->gender;
    }
    public function setGender($gender)
    {
        $this->gender = $gender;
    }


}