<?php
include_once 'header.php';
?>

<section class="login-form center">
    
    <h2>Log In</h2>
    <form action="login.inc.php" method="post">

        <input type="text" name="name" placeholder="Username">

        <button type="submit" name="submit">Log In</button>

    </form>
    
</section>

<?php
include_once 'footer.php';
?>