<?php
session_start();

// if questionNr is 0, it means the test
// hasn't begun yet, so just need to take
// note of username and which test is chosen
// and increment the questionNr to 1
if($_SESSION["questionNr"] == 0){
    $_SESSION["questionNr"]++;
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["test"] = $_POST["test"];
} else {
    // a question has been answered
    // so we have to record the data 
    // and go to the next question

    $test = $_SESSION["test"];
    //test question
    // test answer
    $name = $_SESSION["name"];
    $userAnswer = $_POST["userAnswer"];
    // is correct? ("true"/"false")



    include("../db/db.php");
    // to save something to database
    include("../db/saveAnswers.php");

    $_SESSION["questionNr"]++;
}


// echo $_SESSION["question"];
header("Location: ../test.php");
die();

