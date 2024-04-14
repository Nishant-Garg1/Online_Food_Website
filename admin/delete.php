<?php
include("./connection.php");
$id=$_GET['id'];
$delete="delete from slider where id='$id'";
$dq=mysqli_query($con,$delete);
header("location: slider.php");


$id=$_GET['id'];
$delete="delete from about where id='$id'";
$dq=mysqli_query($con,$delete);
header("location: about.php");

$id=$_GET['id'];
$delete="delete from menu where id='$id'";
$dq=mysqli_query($con,$delete);
header("location: menu.php");
?>