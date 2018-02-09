<?php 
include("db/db.php");
session_start();

$test = $_SESSION["test"];
$questionNr = $_SESSION["questionNr"];
// for some reason mysql doesn't allow math
// maybe that's normal
$questionForMysql = $questionNr - 1;
$currentQuestion = ""; // set in getQuestions.php below
$correctAnswer = ""; // set in getQuestions.php below
$fakeAnswersArray = array(); // set in getQuestions.php below

include("db/getQuestions.php"); // quering happens here
// add fake answers with correct one and mix em up
$allAnswers = array();
array_push($allAnswers, $correctAnswer);
for($i = 0; $i < count($fakeAnswersArray); $i++) {
    array_push($allAnswers, $fakeAnswersArray[$i]);
}
shuffle($allAnswers);


?>

<?php include("partials/header.php") ?> <!-- html header -->

<h1>TEST</h1>
<form action="backend/getTest.php" method="POST">
    <div class="question">
        Question nr <?php echo $questionNr ?>:
        <?php echo $currentQuestion ?>
    </div>

    <div class="answers">
        Answers: <br>

        <?php // generate the answer buttons
        for($i = 0; $i < count($allAnswers); $i++){
            echo "<input type='radio' name='userAnswer' value='$allAnswers[$i]'> $allAnswers[$i] <br>";
        }
        ?>
    </div>
    <div class="progressBar">
        Progress: <?php echo $questionNr ?>
    </div class="nextButton">
    <input type="submit" value="Next">
    <br>
</form>
<?php include("partials/footer.php") ?> <!-- html footer -->