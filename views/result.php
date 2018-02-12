<?php 
require_once("../backend/Session.php");  // creates $session object
$name     = $session->returnUserName();  // get user name
$score    = $session->returnUserScore(); // get score
$correct  = $score[0];                   // correct answer count
$combined = $score[0] + $score[1];       // total question count
?>

<?php include("partials/header.php") ?> <!-- html header -->

<div class="result">
    Good stuff <?php echo $name ?> ,  
    you answered <?php echo $correct ?>  
    of the <?php echo $combined ?>  
    questions correctly.  Have a cookie. <br> 
    <a class="goAgain" href="../index.php">Go Again...?</a>
</div>

<?php include("partials/footer.php") ?> <!-- html footer -->

<?php
$session->end(); // kill session
?>