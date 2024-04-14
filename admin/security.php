<?php
session_start();
if($_SESSION['status'] === "Admin information is not valid"){
    header("location: ../admin.php");
}
?>