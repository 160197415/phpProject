<?php 
include_once 'header.php';
?>


<?php

if (isset($_SESSION["userName"])){
  echo "<h1>Welcome " . $_SESSION["userName"] . "</h1>";
}

?>
</div>


<div class="wrapper">
        <h1>Heading 2 </h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut officia repudiandae voluptatum ex at quam?</p>


<?php 
include_once 'footer.php';
?>