<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 10/26/18
 * Time: 11:30 AM
 */

$connect = mysqli_connect("localhost","root",
    "","Wasafi Group of Schools");
if (isset($_POST['btnsave']))
{
    extract($_POST);
    mysqli_query($connect,"UPDATE `Student Details` SET admno ='$admno',first = '$first', last='$last', gender='$gender',dob='$dob',age='$age',form='$form' WHERE id=$id");
    header("location:home.php");
}

?>

