<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <a class="btn btn-success" href="index.php?page=add">Add</a>
    <table class="table">
        <tr>
            <th>#</th>
            <th>name</th>
            <th>dob</th>
            <th>add</th>
            <th>gender</th>
            <th>image</th>
            <th colspan="2">action</th>
        </tr>
        <?php if (empty($students)): ?>
        <tr>
            <td colspan="5">NODATA</td>
        </tr>
        <?php else: ?>
        <?php foreach ($students as $key=>$student): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $student->getName() ?></td>
            <td><?php echo $student->getDob() ?></td>
            <td><?php echo $student->getAddress() ?></td>
            <td><?php echo $student->getGender() ?></td>
            <td><img style="width: 100px;height: 100px" src="<?php echo $student->getImage() ?>"></td>
            <td><a class="btn btn-success" href="index.php?page=edit&id=<?php echo $student->getId() ?>">Edit</a> </td>
            <td><a class="btn btn-danger" href="index.php?page=delete&id=<?php echo $student->getId() ?>">Delete</a> </td>
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>
    </table>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>