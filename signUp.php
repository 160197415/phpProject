<?php
include_once 'header.php';
?>

<section class="signup-form center">
    
    <h2>Sign Up</h2>
    <form action="signup.inc.php" method="post">

        <input type="text" name="name" placeholder="Username">

        <input type="text" name="UserEmail" placeholder="Email">

        <input type="text" name="Password" placeholder="Password">

        <input type="text" name="PasswordRepeat" placeholder="Repeat Password"> 

        <button type="submit" name="submit">Sign Up</button>

    </form>
    
</section>

<?php
include_once 'footer.php';
?>