<?php 
require_once("../db/Db.php");           // initialize database class
require_once("../backend/Session.php"); // creates $session object

$test          = $session->returnTest();          // test name
$questionNr    = $session->returnQuestionNr();    // current question nr
$questionCount = $session->returnQuestionCount(); // total question count

$questionAndAnswer = $db->returnQuestionAndAnswer($questionNr, $test); // get question with correct answer from db
$currentQuestion   = $questionAndAnswer[0];                            // the question
$correctAnswer     = $questionAndAnswer[1];                            // it's answer
$fakeAnswersArray  = $db->returnFakeAnswersArray($questionNr, $test);  // get fake questions from db

$allAnswers = array();                // real answer + fake ones
include("../backend/mixAnswers.php"); // $allAnswers is filled and shuffled
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

<script src="../js/ProgressBar.js"></script> <!-- progress bar functionality -->

<?php include("partials/footer.php") ?> <!-- html footer -->