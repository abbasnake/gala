<?php
session_start();

if($_SESSION["questionNr"] == 0){
    /*
    if questionNr is 0, it means the test
    hasn't begun yet, so just need to take
    note of username and which test is chosen
    and increment the questionNr to 1
    */
    $_SESSION["questionNr"]++;
    $_SESSION["name"] = htmlentities($_POST["name"]);
    $_SESSION["test"] = htmlentities($_POST["test"]);
    require_once("../db/Db.php");
    $_SESSION["questionCount"] = $db->returnNrOfQuestions($_SESSION["test"]);
} else {
    /*
    a question has been answered
    so we have to record the data 
    and go to the next question
    */
    $test       = $_SESSION["test"];
    $question   = htmlentities($_POST["currentQuestion"]);
    $answer     = htmlentities($_POST["correctAnswer"]);
    $name       = $_SESSION["name"];
    $userAnswer = htmlentities($_POST["userAnswer"]);
    $isCorrect  = ($answer == $userAnswer ? "true" : "false");

    // keep track of score
    $isCorrect == "true" ? $_SESSION["userCorrect"]++ : $_SESSION["userIncorrect"]++;

    require_once("../db/Db.php");
    $db->saveToDb($test, $question, $answer, $name, $userAnswer, $isCorrect);

    $_SESSION["questionNr"]++; // next question
}

header("Location: ../views/test.php"); // when all done, return to test
die();

