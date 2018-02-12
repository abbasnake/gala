<?php 
require_once("../db/Db.php");
require_once("../backend/Session.php");

$test          = $session->returnTest();
$questionNr    = $session->returnQuestionNr();
$questionCount = $session->returnQuestionCount();

$questionAndAnswer = $db->returnQuestionAndAnswer($questionNr, $test);
$currentQuestion   = $questionAndAnswer[0];
$correctAnswer     = $questionAndAnswer[1];
$fakeAnswersArray  = $db->returnFakeAnswersArray($questionNr, $test);

$allAnswers = array();                // real answer + fake ones
include("../backend/mixAnswers.php"); // $allAnswers is filled
?>



<?php include("partials/header.php") ?> <!-- html header -->

<form class="form" action="../backend/testLogic.php" method="POST">
    <div class="form-title">TEST</div>
    <div class="form-question">
        <input type="hidden" name="currentQuestion" value="<?php echo $currentQuestion ?>">
        <?php echo $currentQuestion ?>
    </div>
    
    <input type="hidden" name="correctAnswer" value="<?php echo $correctAnswer ?>">

    <?php for($i = 0; $i < count($allAnswers); $i++): ?>
        <div  class="form-checkbox">
            <input required type="radio" name="userAnswer" value="<?php echo $allAnswers[$i] ?>"> <?php echo $allAnswers[$i] ?> 
        </div>
    <?php endfor; ?>

    <div class="form-progressBar">
        <?php 
        echo htmlspecialchars($questionNr);    // to be used in javascript
        echo htmlspecialchars($questionCount); // to be used in javascript
        ?>
    </div>
    
    <button class="form-submit" type="submit" value="Next">Next</button>
    
</form>

<script src="../js/ProgressBar.js"></script>
<?php include("partials/footer.php") ?> <!-- html footer -->