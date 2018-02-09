<?php

$sql = "INSERT INTO results VALUES (
    NULL,
    '$test',
    'some question',
    'some answer',
    '$name',
    '$userAnswer',
    'true',
    NOW()
)";
mysqli_query($conn, $sql);