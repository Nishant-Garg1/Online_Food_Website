<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div>
        <h2>Nishnat Food</h2>
        </div>
        <div>
       <form action="logout.php" method="POST">
        <button type="submit" name="logout_btn" class="btn btn-primary" >Logout</button>
        </form>
       </div>
    </header>
    <nav>
        <h1  style="padding: 20px; padding-top:30px" >DASHBOARD</h1>
     <h3  style="padding: 20px; margin-top:50px">Pages</h3>
     <a href="dashboard.php">Home</a>
     <a href="slider.php">Slider</a>
     <a href="about.php">About Us</a>
     <a href="menu.php">Menu</a>
    </nav>

    <form action="code.php" method="POST" enctype="multipart/form-data">
    <h2 style="text-align: center; margin:10px;">Slider</h2>
        
        <div>
        <label for="">Image</label>
            <input type="file" name="img" autocomplete="off" class="form-control">
</div>


       
      <div >
        <button type="submit" name="slider_submit">Save</button>
        </div>
      </form>


      <table>
        <tr>
            <th>Image</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        include("./connection.php");
$select="select * from slider";
$sq=mysqli_query($con,$select);
while($ans=mysqli_fetch_array($sq)){
        ?>
        <tr>
            <td><img src="./images/<?php echo $ans["img"] ?>" alt="" width="550px" height="150px"></td>
            <td> <a href="supdate.php?id=<?php echo $ans['id'] ?>">Update</a></td>
        
            <td><a href="delete.php?id=<?php echo $ans['id'] ?>">Delete</a></td>
        </tr>
        <?php } ?>
      </table>
</body>
</html>

