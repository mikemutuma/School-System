<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 10/25/18
 * Time: 11:34 AM
 */


// Start the session
session_start();


if (isset($_POST['pass']))
{
    $connect = mysqli_connect("localhost", "root",
        "", "Wasafi Group of Schools");
    if (!$connect)
    {
        echo "Failed to connect to the Database";
    }
    else
        {
            $usernameoremail = $_POST['usernameoremail'];
            $pass = $_POST['pass'];
            $select = "SELECT `id`, `first`, `last`, `nid`, `email`, `username`, `password` FROM `Teacher Details` WHERE password='$pass' and (username='$usernameoremail' or email='$usernameoremail')";
            $query = mysqli_query($connect,$select);
            $rows = mysqli_num_rows($query);
            if ($rows>=1)
            {
                header("Location:home.php");
                $_SESSION["username"] = "$usernameoremail";
            }
            else
            {
                header("Location:index.php");
            }
        }

}

?>


