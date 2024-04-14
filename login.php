<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-form">
      
        <form action="" method="POST">
        <div class="login-form-group">
        <label htmlFor="email">email</label>
        <input type="email" name="email" required />
        </div>
        <div class="login-form-group">
        <label htmlFor="password">password</label>
        <input type="password" name="password" required />
        </div>
        
        <button class='login-btn' type="submit" name="submit">Login</button>
        <a href="./index.php" class="login-btn" style="text-decoration: none; text-align:center; ">Go Back</a>
        </form>
        <?php
        if(isset($_SESSION['success']) &&  $_SESSION['success']!=''){
           echo '<h2>'.$_SESSION['success']. '</h2>';
           unset($_SESSION['success']);
        }
        if(isset($_SESSION['status']) &&  $_SESSION['status']!=''){
            echo '<h2>'.$_SESSION['status']. '</h2>';
            unset($_SESSION['status']);
         }

        
        ?>
        </div>
        </div>
</body>
</html>

<?php
$con=mysqli_connect("localhost","root","","thirdpro");

if(isset($_POST['submit'])){
 $email=$_POST['email'];
 $password=$_POST['password'];  

 $insert="insert into login (email,password) values('$email','$password')";
 $insertq=mysqli_query($con,$insert);

 if($insertq){
    $_SESSION['success']="login is successfull";
    header("location: index.php");
 }
 else{
$_SESSION['status']="your information is wrong ";
header("location: login.php");
 }
}

?>
