<?php
include_once 'header.php';
?>

<section class="signup-form center">
    
    <h2>Sign Up</h2>
    <form action="includes/signup.inc.php" method="post">

        <input type="text" name="userName" placeholder="Username">

        <input type="text" name="userEmail" placeholder="Email">

        <input type="password" name="password" placeholder="Password">

        <input type="password" name="passwordRepeat" placeholder="Repeat Password"> 

        <button type="submit" name="submit">Sign Up</button>

    </form>

    <?php
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
             echo "<p>Fill out the required fields!</p>";   
        }
      }      

      if (isset($_GET["error"])) {
        if ($_GET["error"] == "invalidusername") {
             echo "<p>Choose an appropriate username please!</p>";   
        }
      }      
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "invalidemail") {
             echo "<p>Choose an appropriate email please!</p>";   
        }
      }      
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "passwordsdontmatch") {
             echo "<p>Passwords do not match!</p>";   
        }
      }      
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "stmtfailed") {
             echo "<p>Something went wrong, try again!</p>";   
        }
      }      
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "usernametaken") {
             echo "<p>Sorry, Username taken!</p>";   
        }
      }      
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "none") {
             echo "<p>Congratulations on signing up!</p>";   
        }
      }      
    
    ?>
    
</section>

<?php
include_once 'footer.php';
?>