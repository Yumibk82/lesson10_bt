<?php


namespace App\model;


class StudentManager
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = 'SELECT * FROM `students`';
        $stmt = $this->database->query($sql);
        $data = $stmt->fetchAll();
        $arr = [];
        foreach ($data as $item){
            $student = new Student($item['name'],$item['DOB'],$item['add'],$item['gender_id']);
            $student->setId($item['id']);
            array_push($arr,$student);
        }
        return $arr;
    }

    public function addStudent($student)
    {
        $sql = 'INSERT INTO `students`(`name`, `DOB`, `add`, `gender_id`) VALUES (:name,:dob,:add,:gender)';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':name',$student->getName());
        $stmt->bindParam(':dob',$student->getDob());
        $stmt->bindParam(':add',$student->getAddress());
        $stmt->bindParam(':gender',$student->getGender());
        $stmt->execute();
    }

    public function getStudentById($id)
    {
        $sql = 'SELECT * FROM `students` WHERE id = :id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function editStudent($student)
    {
        $sql = 'UPDATE `students` SET `name`=:name,`DOB`=:dob,`add`=:add,`gender_id`=:gender WHERE id=:id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':name',$student->getName());
        $stmt->bindParam(':dob',$student->getDob());
        $stmt->bindParam(':add',$student->getAddress());
        $stmt->bindParam(':gender',$student->getGender());
        $stmt->bindParam(':id',$student->getId());
        $stmt->execute();
    }

    public function deleteStudent($id)
    {
        $sql = 'DELETE FROM `students` WHERE id = :id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
    }
}