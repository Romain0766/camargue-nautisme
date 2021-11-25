<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="include/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="./assets/CSS/index.css">
    <link rel="stylesheet" href="./assets/JS/app.js">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,800&display=swap" rel="stylesheet">
     <title>header</title>
</head>

<body>   
  <?php
  require('include/connexion.php');

  define("ROOT", dirname($_SERVER['PHP_SELF']));

  ?>


<header> 
  <div id="root">
    <div id="topnav" class="topnav">
      <a id="home_link" class="topnav_link" href="/">home</a>
  
      <!-- Classic Menu -->
      <nav role="navigation" id="topnav_menu">
        <a class="topnav_link" href="/contact-us">lieu</a>
        <a class="topnav_link" href="/privacy">reservation</a>
        <a class="topnav_link" href="/terms-and-condition">equipement</a>

      </nav>
  
      <a id="topnav_hamburger_icon" href="javascript:void(0);" onclick="showResponsiveMenu()">
        <!-- Some spans to act as a hamburger -->
        <span></span>
        <span></span>
        <span></span>
      </a>
  
      <!-- Responsive Menu -->
      <nav role="navigation" id="topnav_responsive_menu">
        <ul>
          <li><a href="./index.php">home</a></li>
          <li><a href="./lieu.php">lieu</a></li>
          <li><a href="./reservation.php">reservation</a></li>
          <li><a href="./equipement.php">equipement</a></li>
        </ul>
      </nav>
    </div>
  </div>
  </header>
    <script src="./assets/JS/app.js"></script>
</body>
</html>