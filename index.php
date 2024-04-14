<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This website is world best food serving website.Check now">
    <title>Nishnat-FoodFun</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
     integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<!-- Navbar -->
        <nav>
            <div class="logo">
                <div class="img-logo">
                    <img src="./img/cook logo.png" alt="">
                    <h3>Online Food</h3>
                </div>
                <div class="bar" id="bar">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
            <div class="menu" id="menu">
               <div class="manu-link">
                <a href="#home" class="active">home</a>
                <a href="#dish">dishes</a>
                <a href="#about">about</a>
                <a href="#dish">menu</a>
                <a href="#about">review</a>
                <a href="#order">order</a>
               </div>
                <div class="login-btn">
                    <a href="./login.php" class="reuse-btn">Login</a>
                </div>
            </div>
        </nav>
<!-- End Of Navbar -->


<!-- home section -->
    <main id="home">
            <div class="info">
                <h1>welcome to our food hub</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam asperiores architecto atque quae aliquam quos in dolore placeat, nostrum dicta recusandae, suscipit dolor voluptatibus? Sed tenetur ea iste corporis ratione!</p>
                <button class="reuse-btn">Order Now</button>
            </div>
            <div class="imginfo">
            <div class="images">
            <?php
        include("./admin/connection.php");
$select="select * from slider";
$sq=mysqli_query($con,$select);
while($ans=mysqli_fetch_array($sq)){
        ?>      
                <img src="./admin/images/<?php echo $ans["img"] ?>">
            <?php } ?>
            </div>
            </div>
        </main>
 <!-- home section -->
    <!-- About section -->
    <section class="aboutus" id="about">
        <div class="heading about-head">
            <h1>About Us</h1>
            <h2>why choose us?</h2>
        </div>

        <div class="imgtext">
        <?php
        include("./admin/connection.php");
$select="select * from about";
$sq=mysqli_query($con,$select);
while($ans=mysqli_fetch_array($sq)){
        ?>
            <div class="img-info">
                <img src="./admin/images/<?php echo $ans["img"] ?>" alt="" srcset="">
            </div>
            <div class="text-info">
                <h1><?php echo $ans["title"] ?></h1>
                <p><?php echo $ans["des"] ?></p>
                <div class="about-btns">
                    <button class="abtn"><span><i class="fa-solid fa-truck"></i></span>free delivery</button>
                    <button class="abtn"><span><i class="fa-solid fa-sack-dollar"></i></span>easy payment</button>
                    <button class="abtn"><span><i class="fa-solid fa-print"></i></span>best services</button>
                </div>
                    <button class="reuse-btn">learn more</button>
                </div>   
                <?php } ?>        
        </div>
    </section>
     <!-- About section -->

         <!-- Dish section -->
    <section class="dish" id="dish">
        <div class="heading">
            <h1>Our popular dishes</h1>
        </div>
        <div class="box-container">
           
            <?php
        include("./admin/connection.php");
$select="select * from menu";
$sq=mysqli_query($con,$select);
while($ans=mysqli_fetch_array($sq)){
        ?>
         <div class="food-card">
                <img src="./admin/images/<?php echo $ans["img"] ?>" alt="">
               <div class="food-info">
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h2><?php echo $ans["title"] ?></h2>
                <p><?php echo $ans["des"] ?></p>
                <div class="price-btn">
                    <h2><?php echo $ans["price"] ?></h2>
                    <a href="#">add to cart</a>
                </div>
               </div>
               </div>  
               <?php } ?>
          
        </div>

    </section>
     <!-- Dish section -->

<!-- Order Section -->
    <section class="order" id="order">
        <div class="heading">
            <h1>order now</h1>
            <h2>free and fast delivery</h2>
        </div>
        <form action="code.php" method="POST">
            <div class="formsection">
            <div class="first">
            <div class="fgroup">
                <label for="">Your name :</label>
                <input type="text" autocomplete="off" placeholder="enter your name" name="name">
            </div> 
            <div class="fgroup">
                <label for="">Your Phone :</label>
                <input type="text" autocomplete="off" placeholder="enter your phone number" name="phone">
            </div>
            <div class="fgroup">
                <label for="">Your order :</label>
                <input type="text" autocomplete="off" placeholder="enter food name" name="order">
            </div>
        </div>
        <div class="second">
            <div class="fgroup">
                <label for="">Data and time :</label>
                <input type="date" placeholder="enter date and time" autocomplete="off" name="date">
            </div> 
            <div class="fgroup">
                <label for="">your Address : </label>
                <input type="text" name="address" placeholder="enter your address"></input>
            </div>
            <div class="fgroup">
                <label for="">your Message :</label>
                <input type="text" name="message" placeholder="enter your message"></input>
            </div>
        </div>
    </div>
    <div class="obox">
        <button class="order-btn reuse-btn" type="submit" name="submit">Order Now</button>
    </div>
    
        </form>
    </section>
    <!--  footer Section -->
    <footer class="big-foot">
        <div class="quick-link">
            <h4>Quick Link</h4>
            <ul>
                <li><a href="#">home</a></li>
                <li> <a href="#">dishes</a></li>
                <li> <a href="#">about</a></li>
                <li> <a href="#">menu</a></li>
                <li> <a href="#">review</a></li>
                <li><a href="#">order</a></li>
            </ul>
        </div>
        <div class="location">
            <h4>Location</h4>
            <ul>
                <li><a href="#">india</a></li>
                <li> <a href="#">USA</a></li>
                <li> <a href="#">France</a></li>
                <li> <a href="#">india</a></li>
                <li> <a href="#">japan</a></li>
            </ul>
        </div>
        <div class="contact-us">
            <h4>Contact Us</h4>
            <ul>
                <li><a href="#">+932-782-4537</a></li>
                <li> <a href="#">+932-782-4537</a></li>
                <li> <a href="#">nishnatgarg@gmail.com</a></li>
                <li> <a href="#">nishnatgarg@gmail.com</a></li>
                <li> <a href="#">Loni India-201102</a></li>
            </ul>
        </div>
        <div class="follow-us">
            <h4>Follow Us</h4>
            <ul>
                <li><a href="#">instagram</a></li>
                <li> <a href="#">facebook</a></li>
                <li> <a href="#">linkedin</a></li>
                <li> <a href="#">twitter</a></li>
            </ul>
        </div>
    </footer>
    <div class="line"></div>
    <footer class="small-foot">
        <p>&copy; Copyright @ 2023-2024 | All right reserved</p>
    </footer>
    <!-- Scroll btn -->
    <div class="hideshow">
        <div id="scroll-btn">⬆</div>
    </div>
    <!-- Java script -->
    <script src="app.js"></script>
</body>

</html>