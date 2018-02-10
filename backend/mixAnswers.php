<?php

/*
$allAnswers = correct answer + fake ones
and shuffled
*/
array_push($allAnswers, $correctAnswer);
for($i = 0; $i < count($fakeAnswersArray); $i++) {
    array_push($allAnswers, $fakeAnswersArray[$i]);
}
shuffle($allAnswers);