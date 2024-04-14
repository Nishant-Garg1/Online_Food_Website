<?php
$con = mysqli_connect("localhost","root","","thirdpro");

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $order=$_POST['order'];
    $date=$_POST['date'];
    $address=$_POST['address'];
    $message=$_POST['message'];
}

// $insert="insert into register (name,phone,order,date,address,message) values('$name','$phone','$order','$date','$address','$message') ";
$insert = "INSERT INTO `register`( `name`, `phone`, `order`, `date`, `address`, `message`) VALUES ('$name','$phone','$order','$date','$address','$message')";
$insertq=mysqli_query($con,$insert);

if($insertq){
    header("location: index.php");
}
else{
    header("location: code.php");
}
// name	phone	order	date	address	message
// $insert="insert into about (title,img,des,link) values('$title','$img_name','$des','$link')";
// $insertq=mysqli_query($con,$insert);
?>


