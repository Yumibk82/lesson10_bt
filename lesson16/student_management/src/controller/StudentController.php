<?php
namespace App\controller;

use App\model\Student;
use App\model\StudentManager;

class StudentController
{
    protected $studentManager;

    public function __construct()
    {
        $this->studentManager = new StudentManager();
    }

    public function show()
    {
        $students = $this->studentManager->getAll();
        include_once "src/view/list.php";
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            include_once "src/view/add.php";
        } else {
            $name = $_REQUEST['name'];
            $dob = $_REQUEST['dob'];
            $address = $_REQUEST['address'];
            $gender = $_REQUEST['gender'];
            $student = new Student($name,$dob,$address,$gender);
            $this->studentManager->addStudent($student);
            header('location:index.php');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            $id = $_REQUEST['id'];
            $student = $this->studentManager->getStudentById($id);
            include_once "src/view/edit.php";
        } else {
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $dob = $_REQUEST['dob'];
            $address = $_REQUEST['address'];
            $gender = $_REQUEST['gender'];
            $student = new Student($name,$dob,$address,$gender);
            $student->setId($id);
            $this->studentManager->editStudent($student);
            header('location:index.php');
        }
    }

    public function delete()
    {
        $id = $_REQUEST['id'];
        $this->studentManager->deleteStudent($id);
        header('location:index.php');

    }
}