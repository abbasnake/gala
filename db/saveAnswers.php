<?php
require_once("db.php");

$sql = "INSERT INTO results VALUES (
    NULL,
    '$test',
    '$question',
    '$answer',
    '$name',
    '$userAnswer',
    '$isCorrect',
    NOW()
)";
mysqli_query($conn, $sql);