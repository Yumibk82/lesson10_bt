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
<h1>STUDENT DATABASE</h1>
<?php
include 'DBConnect.php';
$db=new DBConnect();
$conn = $db->connect();
$query="SELECT * FROM students";
$stmt=$conn->prepare($query);
$stmt->execute();
$result= $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<a href="add.php">Addition</a>
<table style="border: 1px solid black">
    <tr>
        <td>STT</td>
        <td>Name</td>
        <td>Dob</td>
        <td>Address</td>
        <td>Action</td>
    </tr>
    <?php foreach ($result as $key=>$value): ?>
    <tr>
        <td><?php echo $key+1; ?></td>
        <td><?php echo $value['name']; ?></td>
        <td><?php echo $value['dob']; ?></td>
        <td><?php echo $value['address']; ?></td>
        <td></td>
        <td>
            <a href="delete.php?id=<?php echo $value['id']; ?>">DELETE</a>
            <a href="edit.php?id=<?php echo $value['id']; ?> ">EDIT</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>