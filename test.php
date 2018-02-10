<?php 
session_start();

$test       = $_SESSION["test"];
$questionNr = $_SESSION["questionNr"];

require_once("db/Db.php");    // quering happens here
$questionAndAnswer = $db->returnQuestionAndAnswer($questionNr, $test);
$currentQuestion   = $questionAndAnswer[0];
$correctAnswer     = $questionAndAnswer[1];
$fakeAnswersArray  = $db->returnFakeAnswersArray($questionNr, $test);

$allAnswers = array();             // real answer + fake ones
include("backend/mixAnswers.php"); // $allAnswers is filled
?>



<?php include("partials/header.php") ?> <!-- html header -->

<h1>TEST</h1>
<form action="backend/testLogic.php" method="POST">
    <div class="question">
        Question nr <?php echo $questionNr ?> <br>
        <input type="hidden" name="currentQuestion" value="<?php echo $currentQuestion ?>">
        <?php echo $currentQuestion ?>
    </div>
    <br>
    <div class="answers">
        <input type="hidden" name="correctAnswer" value="<?php echo $correctAnswer ?>">
        Answers: <br>
        
        <?php for($i = 0; $i < count($allAnswers); $i++): ?>
            <input type="radio" name="userAnswer" value="<?php echo $allAnswers[$i] ?>"> <?php echo $allAnswers[$i] ?> <br>
        <?php endfor; ?>

    </div>
    <br>
    <div class="progressBar">
        Progress: <?php echo $questionNr ?>
    </div class="nextButton">
    <br>
    <input type="submit" value="Next">
    <br>
</form>

<?php include("partials/footer.php") ?> <!-- html footer -->