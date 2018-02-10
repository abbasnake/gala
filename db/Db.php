<?php

/*
    This class is responsible for communication
    with the database
    !THE CLASS IS INSTANTIATED AT THE END OF THIS SCRIP SO THAT WE
    DON'T HAVE TO DO IT EVERYWHERE IT'S NEEDED!
*/

class Db {
    // db info
    private $dbServername = "localhost";
    private $dbUserName   = "root";
    private $dbPassword   = "database";
    private $dbName       = "printful_test";
    // connection
    private $conn;

    public function __construct() {
        $this->makeConnection();
    }

    private function makeConnection() {
        $this->conn = mysqli_connect( // mysqli, not mysql
            $this->dbServername,
            $this->dbUserName,
            $this->dbPassword,
            $this->dbName
        );
    }

    public function saveToDb($test, $question, $answer, $name, $userAnswer, $isCorrect){
        $sql = "INSERT INTO results VALUES (
        NULL,
        '$test',
        '$question',
        '$answer',
        '$name',
        '$userAnswer',
        '$isCorrect',
        NOW()
        );";

        mysqli_query($this->conn, $sql);
    }

    public function returnQuestionAndAnswer($questionNr, $test) {
        $indexOffset     = $questionNr - 1; // because question 1 is at index 0
        $sql             = "SELECT * FROM $test LIMIT 1 OFFSET $indexOffset;";
        $result          = mysqli_query($this->conn, $sql);
        $resultCheck     = mysqli_num_rows($result);
        $currentQuestion = "";
        $correctAnswer   = "";

        if($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $currentQuestion =  $row["question"];
                $correctAnswer   =  $row["answer"];
            }
        } else {
            // when no more questions
            header("Location: result.php");
            die();
        }

        return array($currentQuestion, $correctAnswer);
    }

    public function returnFakeAnswersArray($questionNr, $test) {
        //choose fake answer table according to test
        $fakeAnswers      = $this->chooseFakeAnswers($test);

        $sql              = "SELECT * FROM $fakeAnswers;";
        $result           = mysqli_query($this->conn, $sql);
        $resultCheck      = mysqli_num_rows($result);
        $fakeAnswersArray = array();

        if($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($fakeAnswersArray, $row["question".$questionNr]);
            }
        }
        return $fakeAnswersArray;
    }

    private function chooseFakeAnswers($test) {
        // if test1 then fakeAnswers1, if test7 then fakeAnswers7 etc
        $testNumber = substr($test, -1);
        return "fake_answers".$testNumber;
    }
}

// instatiating the class whenever this file is imported somewhere
$db = new Db();