<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/design.css">
</head>
<body>
<h1 class="tu">You are logged in.</h1>
<a href="savestudents.php"><button class="btn btn-primary">Add Students</button></a>
<p class="lo"><a href="index.php"><button class="btn btn-primary">Log Out</button></a></p>
<hr>
<table>
    <tr>
        <th>AdmNo</th>
        <th>First</th>
        <th>Last</th>
        <th>Gender</th>
        <th>Dob</th>
        <th>Age</th>
        <th>Form</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>

    <?php
    /**
     * Created by PhpStorm.
     * User: emobilis
     * Date: 10/18/18
     * Time: 11:09 AM
     */


    $connect = mysqli_connect("localhost", "root",
        "", "Wasafi Group of Schools");
    if (!$connect)
    {
        echo "Failed to connect to the Database";
    }
    else
        {
            $fetch = mysqli_query($connect,"SELECT * FROM `Student Details`");
            while ($row = mysqli_fetch_assoc($fetch))
            {
                extract($row);
                echo
                "<tr>
<td>$admno</td>
<td>$first</td>
<td>$last</td>
<td>$gender</td>
<td>$dob</td>
<td>$age</td>
<td>$form</td>
<td><a href='update.php?x=$id'><button class='btn btn-success'>Update</button></a></td>
<td><a href='delete.php?x=$id'><button class='btn btn-danger'>Delete</button></a></td>
</tr>";
            }
        }

    ?>

</table>
</body>
</html>

