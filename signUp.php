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
    
</section>

<?php
include_once 'footer.php';
?>