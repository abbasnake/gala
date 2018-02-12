<?php
require_once("../db/Db.php");
require_once("../backend/Session.php");
$questionNr = $session->returnQuestionNr();

if($questionNr == 0){
    /*
    if questionNr is 0, it means the test
    hasn't begun yet, so just need to take
    note of username and which test is chosen
    and increment the questionNr to 1
    */
    $session->incrementQuestionNr();
    $session->setUserName(htmlentities($_POST["name"]));
    $session->setTest(htmlentities($_POST["test"]));
    $questionCount = $db->returnNrOfQuestions($_POST["test"]);
    $session->setQuestionCount($questionCount);
} else {
    /*
    a question has been answered
    so we have to record the data 
    and go to the next question
    */
    $test       = $session->returnTest();
    $question   = htmlentities($_POST["currentQuestion"]);
    $answer     = htmlentities($_POST["correctAnswer"]);
    $name       = $session->returnUserName();
    $userAnswer = htmlentities($_POST["userAnswer"]);
    $isCorrect  = ($answer == $userAnswer ? "true" : "false");

    // keep track of score
    $isCorrect == "true" ? $session->incrementCorrect() : $session->incrementIncorrect();

    $db->saveToDb($test, $question, $answer, $name, $userAnswer, $isCorrect);

    $session->incrementQuestionNr(); // next question
}

header("Location: ../views/test.php"); // when all done, return to test
die();

