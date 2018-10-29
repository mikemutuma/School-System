<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 10/26/18
 * Time: 10:27 AM
 */

if (isset($_POST['submit']))
{
    $connect = mysqli_connect("localhost","root",
        "","Wasafi Group of Schools");
    if (!$connect)
    {
        echo "failed to connect to the Database";
    }
    else
    {
        $admno = $_POST['admno'];
        $first = $_POST['first'];
        $last = $_POST['last'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $age = $_POST['age'];
        $form = $_POST['form'];
        $insert ="INSERT INTO `Student Details`(`id`, `admno`, `first`, `last`, `gender`, `dob`, `age`, `form`) VALUES (null,'$admno','$first','$last','$gender','$dob','$age','$form')";
        $query = mysqli_query($connect,$insert);
        if ($insert)
        {
            echo "Saved Successfully";
            header("location:savestudents.php");
        }
        else
        {
            echo "Failed to save";
        }
    }
}


?>