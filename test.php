<?php 
session_start();

$test       = $_SESSION["test"];
$questionNr = $_SESSION["questionNr"];

$questionForMysql = $questionNr - 1; // to avoid math in sql query
$currentQuestion  = "";              // set in getQuestions.php below
$correctAnswer    = "";              // set in getQuestions.php below
$fakeAnswersArray = array();         // set in getQuestions.php below
$allAnswers       = array();         // real answer + fake ones

include("db/getQuestions.php");    // quering happens here
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