<?php
require_once("../db/Db.php");
require_once("../backend/Session.php");     // creates $session object
$questionNr = $session->returnQuestionNr(); // current question

if($questionNr == 0){
    /*
    if questionNr is 0, it means the test
    hasn't begun yet, so just need to take
    note of username and which test is chosen
    and increment the questionNr to 1
    */
    $session->incrementQuestionNr();                           // increment question
    $session->setUserName(htmlentities($_POST["name"]));       // save username
    $session->setTest(htmlentities($_POST["test"]));           // save chosen test
    $questionCount = $db->returnNrOfQuestions($_POST["test"]); // get question count of the chosen test
    $session->setQuestionCount($questionCount);                // save question count
} else {
    /*
    a question has been answered
    so we have to record the data 
    and go to the next question
    */
    $test       = $session->returnTest();                      // current test name
    $question   = htmlentities($_POST["currentQuestion"]);     // current question
    $answer     = htmlentities($_POST["correctAnswer"]);       // correct answer of that question
    $name       = $session->returnUserName();                  // name of the user
    $userAnswer = htmlentities($_POST["userAnswer"]);          // what the user answered
    $isCorrect  = ($answer == $userAnswer ? "true" : "false"); // was the user correct?

    $isCorrect == "true" ? $session->incrementCorrect() : $session->incrementIncorrect(); // add to user score

    $db->saveToDb($test, $question, $answer, $name, $userAnswer, $isCorrect); // save to db

    $session->incrementQuestionNr(); // next question
}

header("Location: ../views/test.php"); // go to next (or first) question
die();

