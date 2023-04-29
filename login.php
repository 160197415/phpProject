<?php
include_once 'header.php';
?>

<section class="login-form center">
    
    <h2>Log In</h2>
    <form action="includes/login.inc.php" method="post">

        <input type="text" name="userName" placeholder="Username">

        <input type="password" name="password" placeholder="Password">

        <button type="submit" name="submit">Log In</button>

    </form>
    

    <?php
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
             echo "<p>Fill out the required fields please!</p>";   
        }
      }      

      if (isset($_GET["error"])) {
        if ($_GET["error"] == "wronglogin") {
             echo "<p>Incorrect Login Information!</p>";   
        }
      }      
        
    
    ?>
</section>

<?php
include_once 'footer.php';
?>