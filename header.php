<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="styles.css">

</head>

<body>


  <nav>


    <ul>
      <li><a class="active" href="index.php">Home</a></li>
      <?php

      if (isset($_SESSION["userName"])) {
        echo "<li><a href='profile.php'>Profile Page</a></li>";
        echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
      } else {
        echo "<li><a href='signup.php'>Sign Up</a></li>";
        echo "<li><a href='login.php'>Log In</a></li>";
      }
      ?>
    </ul>
  </nav>





  <div class="wrapper">