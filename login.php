<?php
include_once 'header.php';
?>

<section class="login-form center">
    
    <h2>Log In</h2>
    <form action="includes/login.inc.php" method="post">

        <input type="text" name="userName" placeholder="Username">

        <input type="text" name="password" placeholder="Password">

        <button type="submit" name="submit">Log In</button>

    </form>
    
</section>

<?php
include_once 'footer.php';
?>