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
        include_once "src/view/list.php";//NHUNG mang student vao duong dan src/view/list
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            include_once "src/view/add.php";
        } else {
            $file = $_FILES['image']['tmp_name'];
            $path = 'uploads/'.$_FILES['image']['name'];
            if (move_uploaded_file($file,$path)){
                echo 'success';
            } else {
                echo 'fail';
            }
            $image = $path == 'uploads/'?'uploads/default.png':$path;
            $name = $_REQUEST['name'];
            $dob = $_REQUEST['dob'];
            $address = $_REQUEST['address'];
            $gender = $_REQUEST['gender'];
            $student = new Student($name,$dob,$address,$gender,$image);
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
            $file = $_FILES['image']['tmp_name'];
            $path = 'uploads/'.$_FILES['image']['name'];
            if (move_uploaded_file($file,$path)){
                echo 'success';
            } else {
                echo 'fail';
            }
            $image = $path == 'uploads/'?'uploads/default.png':$path;
            $student = new Student($name,$dob,$address,$gender,$image);
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