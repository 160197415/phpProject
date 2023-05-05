<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="styles.css">
  <!-- <link rel="stylesheet" href="newccsfile.css"> -->

</head>

<body>


  <nav class="grid-container navbar-collapse navbar-expand">

  <a href="index.php"><div> <img src="imgs/Original.png" alt="logo" class="logo"/></div></a>
  <div></div>
  <div>

    <ul>
      <li ><a class="active" href="about.php">About Us</a></li>
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