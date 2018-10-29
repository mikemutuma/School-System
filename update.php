<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/design.css">
</head>
<body>
<h1>Update Users</h1>
<a href="home.php"><button class="btn btn-primary">Cancel</button></a>
<hr>
<form action="updateprocess.php" method="POST" class="j">

    <?php
    /**
     * Created by PhpStorm.
     * User: emobilis
     * Date: 10/23/18
     * Time: 10:37 AM
     */

    $connect = mysqli_connect("localhost","root",
        "","Wasafi Group of Schools");
    $id = $_GET['x'];
    $fetch = mysqli_query($connect,"SELECT * FROM `Student Details` WHERE id= $id");
    $row = mysqli_fetch_assoc($fetch);
    extract($row);

    ?>
    <input class="l" type="number" name="admno" required value="<?php echo $admno;?>">
    <input class="l" type="text" name="first" required value="<?php echo $first;?>">
    <input class="l" type="text" name="last" required value="<?php echo $last;?>"><br>
    <input class="ll" type="radio" name="gender" value="Male" <?php echo $gender;?>">Male
    <input class="ll" type="radio" name="gender" value="Female" <?php echo $gender;?>">Female
    <input class="l" type="date" name="dob" required value="<?php echo $dob;?>">
    <input class="l" type="number" name="age" required value="<?php echo $age;?>">
    <input class="l" type="number" name="form" required value="<?php echo $form;?>">
    <input type="number" name="id" value="<?php echo $id;?>" hidden>
    <input type="submit" name="btnsave" value="Update" class="btn btn-info">

</form>
</body>
