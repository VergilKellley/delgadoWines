<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/styles.css" />
    <!-- google fonts CDN-->
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Quicksand:wght@600&family=Russo+One&display=swap" rel="stylesheet">
    <!--jQuery CDN -->
   <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
    <script src="js/cart.js" async></script>
    <script src="js/main.js" async></script>
    
    <title>Delgado Winery</title>
  </head>
  <body>
  <!----------NAVIGATION---------------->
  <section class="nav-container">
    <div class="top-nav-container">
      <div class="top-nav">
        <div class="logo-div">
          <a id="logo" href="index.php">
            <img class="wine-logo" src="images/wineLogo.jpg" alt="logo image">
          </a>
        </div>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="shop.php">Shop Now</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php
          if (isset($_SESSION['userId'])) {
            echo '
            <form action="includes/logout.inc.php" method="post">
            <button class="logout-btn btn" type="submit" name="logout-submit">Logout</button>
          </form>';
          } else {
             echo' <form id="login-form" action="includes/login.inc.php" method="post">
                <input
                type="text"
                  id="username"
                  name="mailuid"
                  value=""
                  placeholder="Username" 
                />
                <input
                type="password"
                  id="pwd"
                  name="pwd"
                  value=""
                  placeholder="Password"
                  
                
                />
                <button class="loginBtn" type="submit" name="login-submit" onclick="clearForm()" >Login</button>
                <a href="signup.php">Sign Up Now</a>
              </form>';
          }
              ?>
        </ul>
      </div>
    </div>
  </section>
  <!------------MOBILE NAVIGATION----------------------->
 <!-- <div class="mobile-nav-container">
    <div class="mobile-img"></div>
    <nav class='mobile-navbar'>
      <div class='hamburger-menu'>
        <div class='line line-1'></div>
        <div class='line line-2'></div>
        <div class='line line-3'></div>
      </div>

      <ul>
        <li class='nav-item'>
          <a class="nav-link" href='index.php'>Home</a>
        </li>
        <li class='nav-item'>
          <a class="nav-link" href="shop.php">Shop</a>
        </li>
        <li class='nav-item'>
          <a class="nav-link" href='about.php'>About</a>
        </li>
      </ul>
    </nav>
  </div>-->