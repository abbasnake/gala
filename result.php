<?php 
session_start();
?>

<?php include("partials/header.php") ?> <!-- html header -->

<h1>RESULTS</h1>

<h2>
    Good stuff <?php echo $_SESSION["name"] ?> , you answered <?php echo $_SESSION["userCorrect"] ?> of the <?php echo $_SESSION["userCorrect"] + $_SESSION["userIncorrect"] ?> questions correctly. Have a cookie.
    
</h2>

<button>
    <a href="index.php">Go Again...?</a>
</button>

<?php include("partials/footer.php") ?> <!-- html footer -->

<?php
session_unset();
session_destroy();
?>