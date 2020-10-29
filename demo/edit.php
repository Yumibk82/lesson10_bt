<?php
include 'DBConnect.php';
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $db = new DBConnect();
    $conn=$db->connect();
    $query = "SELECT * FROM students WHERE id=$id";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
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
        <legend>edit data</legend>
        <table>
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            <tr>
                <td>name</td>
                <td><input type="text" name="name" value="<?php echo $data['name']; ?>"></td>
            </tr>
            <tr>
                <td>date of birth</td>
                <td><input type="text" name="dob" value="<?php echo $data['dob']; ?>"></td>
            </tr>
            <tr>
                <td>address</td>
                <td><input type="text" name="address" value="<?php echo $data['address']; ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="update" value="UPDATE"></td>
            </tr>
        </table>
    </fieldset>
</form>
<?php
function update($_name,$_dob,$_address,$_id){
    $db= new DBConnect();
    $conn = $db->connect();
    $query="UPDATE students SET name=:name,dob=:dob,address=:address WHERE id=:id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':name',$_name);
    $stmt->bindParam(':dob',$_dob);
    $stmt->bindParam(':address',$_address);
    $stmt->bindParam(':id',$_id);
    $stmt->execute();
}
if (isset($_POST['update'])){
    $id =$_POST['id'];
    $name =$_POST['name'];
    $dob =$_POST['dob'];
    $address =$_POST['address'];
    update($name,$dob,$address,$id);
    header('location:index.php');
}
?>
</body>
</html>