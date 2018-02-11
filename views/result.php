<?php 
session_start();
?>

<?php include("partials/header.php") ?> <!-- html header -->

<div class="result">
    Good stuff <?php echo $_SESSION["name"] ?> ,  
    you answered <?php echo $_SESSION["userCorrect"] ?>  
    of the <?php echo $_SESSION["userCorrect"] + $_SESSION["userIncorrect"] ?>  
    questions correctly.  Have a cookie. <br> 
    <a class="goAgain" href="../index.php">Go Again...?</a>
</div>

<?php include("partials/footer.php") ?> <!-- html footer -->

<?php
session_unset(); // end session
session_destroy();
?>