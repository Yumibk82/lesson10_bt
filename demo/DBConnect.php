<?php
use PDO;

class DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn="mysql:host=localhost;dbname=studentManagement";
        $this->username="root";
        $this->password="Tulinh0308@a";
    }

    public function connect()
    {
        $connect=new PDO($this->dsn,$this->username,$this->password);
        return $connect;
    }
}