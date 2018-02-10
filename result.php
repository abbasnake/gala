<?php 
session_start();
?>

<?php include("partials/header.php") ?> <!-- html header -->

<div class="title">
    Good stuff <?php echo $_SESSION["name"] ?> , you answered <?php echo $_SESSION["userCorrect"] ?> of the <?php echo $_SESSION["userCorrect"] + $_SESSION["userIncorrect"] ?> questions correctly. Have a cookie.
    
</div>

<a href="index.php">Go Again...?</a>

<?php include("partials/footer.php") ?> <!-- html footer -->

<?php
session_unset();
session_destroy();
?>