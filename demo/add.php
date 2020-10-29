<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>ADD DATABASE</legend>
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Date of birth</td>
                <td><input type="text" name="dob"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="add" value="ADD">
                </td>
            </tr>
            <tr>
        </table>
    </fieldset>
</form>
<?php
include 'DBConnect.php';
function add($_name,$_dob,$_address){
    $db = new DBConnect();//tao ra 1 doi tuong co 3 thuoc tinh
    $conn = $db->connect();//truyen 3 thuoc tinh o tren de khoi tao mot doi tuong PDO
    $query = "INSERT INTO students(name,dob,address) VALUES (:name,:dob,:address)";//bien query = lenh truyen gia tri vao bang
    $stmt = $conn->prepare($query);//convert chuoi thanh doi tuong cua lop PDO de co the su dung cac phuong thuc cua PDO
    echo "<pre>";
        var_dump($stmt);
    $stmt->bindParam(':name',$_name);
    $stmt->bindParam(':dob',$_dob);
    $stmt->bindParam(':address',$_address);
//    $data = array("name"=>$_name,"dob"=>$_dob,"address"=>$_address);
    echo "<pre>";
    var_dump($stmt);
    $stmt->execute();
    echo "<pre>";
//    var_dump($data);
}
if (isset($_POST['add'])){
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    add($name,$dob,$address);
    header("location:index.php");
}

?>
</body>
</html>