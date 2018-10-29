<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 10/26/18
 * Time: 12:09 PM
 */

$connect = mysqli_connect("localhost","root",
    "","Wasafi Group of Schools");
if (isset($_GET['x']))
{
    $id = $_GET['x'];
    mysqli_query($connect,"DELETE FROM `Student Details` WHERE id= $id");
    header("location:home.php");
}

?>