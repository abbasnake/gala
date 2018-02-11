<?php 
session_start();

$test       = $_SESSION["test"];
$questionNr = $_SESSION["questionNr"];

require_once("../db/Db.php");
$questionAndAnswer = $db->returnQuestionAndAnswer($questionNr, $test);
$currentQuestion   = $questionAndAnswer[0];
$correctAnswer     = $questionAndAnswer[1];
$fakeAnswersArray  = $db->returnFakeAnswersArray($questionNr, $test);

$allAnswers = array();             // real answer + fake ones
include("../backend/mixAnswers.php"); // $allAnswers is filled
?>



<?php include("partials/header.php") ?> <!-- html header -->

<form class="form" action="../backend/testLogic.php" method="POST">
    <div class="title">TEST</div>
    <div class="question">
        <input type="hidden" name="currentQuestion" value="<?php echo $currentQuestion ?>">
        <?php echo $currentQuestion ?>
    </div>
    
    <input type="hidden" name="correctAnswer" value="<?php echo $correctAnswer ?>">

    <?php for($i = 0; $i < count($allAnswers); $i++): ?>
        <div  class="checkbox">
            <input required type="radio" name="userAnswer" value="<?php echo $allAnswers[$i] ?>"> <?php echo $allAnswers[$i] ?> 
        </div>
    <?php endfor; ?>


    
    <div class="progressBar">
        Progress: <?php echo $questionNr ?>
    </div class="nextButton">
    
    <button class="form-submit" type="submit" value="Next">Next</button>
    
</form>

<?php include("partials/footer.php") ?> <!-- html footer -->