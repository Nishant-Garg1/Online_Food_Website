<?php
include("./connection.php");

if(isset($_POST['slider_submit'])){
  
    $img = $_FILES['img'];
    $img_name = $img['name'];
    $img_tem = $img["tmp_name"];
    move_uploaded_file($img_tem,"images/$img_name");

$insert="insert into slider (img) values('$img_name')";
$insertq=mysqli_query($con,$insert);

if($insertq){
    header("location: slider.php");
}
else{
    header("location: code.php");
}
}

if(isset($_POST['about_submit'])){
    $title=$_POST['title'];
    $des=$_POST['des'];
    $img = $_FILES['img'];
    $img_name = $img['name'];
    $img_tem = $img["tmp_name"];
    move_uploaded_file($img_tem,"images/$img_name");

$insert="insert into about (title,des,img) values('$title','$des','$img_name')";
$insertq=mysqli_query($con,$insert);

if($insertq){
    header("location: about.php");
}
else{
    header("location: code.php");
}
}


if(isset($_POST['menu_submit'])){
    $title=$_POST['title'];
    $des=$_POST['des'];
    $price=$_POST['price'];
    $img = $_FILES['img'];
    $img_name = $img['name'];
    $img_tem = $img["tmp_name"];
    move_uploaded_file($img_tem,"images/$img_name");

$insert="insert into menu (title,des,price,img) values('$title','$des','$price','$img_name')";
$insertq=mysqli_query($con,$insert);

if($insertq){
    header("location: menu.php");
}
else{
    header("location: code.php");
}
}
?>