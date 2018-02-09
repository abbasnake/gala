<?php

// getting information from database
$sql = "SELECT * FROM $test LIMIT 1 OFFSET $questionForMysql;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $currentQuestion =  $row["question"];
        $correctAnswer =  $row["answer"];
    }
} else {
    // when no more questions
    header("Location: result.php");
    die();
}


//check whitch test is used
if($test == "test1") {
    $fakeAnswers = "fake_answers1";
}
if($test == "test2") {
    $fakeAnswers = "fake_answers2";
}
if($test == "test3") {
    $fakeAnswers = "fake_answers3";
}

// echo "fakeQuestions is " . $fakeAnswers;

// returns $fakeAnswersArray with the fake answers
$sql = "SELECT * FROM $fakeAnswers;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($fakeAnswersArray, $row["question".$questionNr]);
    }
}