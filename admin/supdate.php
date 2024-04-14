<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
    <h2 style="text-align: center; margin:10px;">Slider Update</h2>
        <?php
include("./connection.php");
$id=$_GET['id'];
$select="select * from slider";
$sq=mysqli_query($con,$select);
$ans=mysqli_fetch_array($sq);

if(isset($_POST['slider_submit'])){
   
    $img = $_FILES['img'];
    $img_name = $img['name'];
    $img_tem = $img["tmp_name"];
    move_uploaded_file($img_tem,"images/$img_name");
    
   

    $update="update slider set img='$img_name' where id='$id'";
    $uq=mysqli_query($con,$update);
    header("location: slider.php");
}
        ?>
        <div>
        <label for="">Image</label>
            <input type="file" name="img" autocomplete="off" class="form-control" value="<?php echo $ans['img'] ?>">
</div>




       
      <div >
        <button type="submit" name="slider_submit" >Update</button>
        </div>
      </form>
</body>
</html>