<?php
session_start();
?>



<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
  <nav class="grid-container">

    <div class="grid-item">
      <a href="index.php"><img src="imgs/Original.png" alt="logo" class="logo" /></a>
    </div>
    <div class="grid-item"></div>
    <div class="grid-item-nav" id="myTopnav">
      <ul>
        <li><a href="javascript:void(0);" class="icon" onclick=myFunction()><i class="fa fa-bars"></i></a></li> 
        <li><a class="active" href="about.php">About Us</a></li>     
        
        <?php
        if (isset($_SESSION["userName"])) {
          echo "<li><a href='news.php'>News</a></li>";
          echo "<li><a href='projects.php'>Projects and Services</a></li>";
          echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
          
        } else {
          echo "<li><a href='projects.php'>Projects and Services</a></li>";
          echo "<li><a href='signup.php'>Sign Up</a></li>";
          echo "<li><a href='login.php'>Log In</a></li>";          
        }
        ?>
      </ul>
    </div>
  </nav>

  

  <div class="wrapper">