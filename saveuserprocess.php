<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 10/25/18
 * Time: 11:12 AM
 */

if (isset($_POST['password']))
{
    $connect = mysqli_connect("localhost", "root",
        "", "Wasafi Group of Schools");
    if (!$connect)
    {
        echo "Failed to connect to the Database";
    }
    else
    {
        $first = $_POST['first'];
        $last = $_POST['last'];
        $nid = $_POST['nid'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $insert = "INSERT INTO `Teacher Details`(`id`, `first`, `last`, `nid`, `email`, `username`, `password`) VALUES (null,'$first','$last','$nid','$email','$username','$password')";
        $query = mysqli_query($connect, $insert);
        if ($insert)
        {
            echo "Saved Successfully";
            header("location:home.php");
        }
        else {

            echo "Failed to Save";
        }
    }

}


?>