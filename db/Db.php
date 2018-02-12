<?php

/*
This class is responsible for communication
with the database
!THE CLASS IS INSTANTIATED AT THE END OF THIS PAGE SO THAT WE
DON'T HAVE TO DO IT EVERYWHERE IT'S NEEDED!
*/

class Db {
    // db info
    private $dbServername = "localhost";     // server
    private $dbUserName   = "root";          // db username
    private $dbPassword   = "database";      // db password
    private $dbName       = "printful_test"; // name of db
    private $conn;                           // connection

    public function __construct() { // make connection when initialized
        $this->makeConnection();
    }

    private function makeConnection() {
    $this->conn = mysqli_connect(
        $this->dbServername,
        $this->dbUserName,
        $this->dbPassword,
        $this->dbName
    );
    }

    public function saveToDb($test, $question, $answer, $name, $userAnswer, $isCorrect){ // to mysql
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

        if($resultCheck > 0) {                           // get current question and it's answer
            while ($row = mysqli_fetch_assoc($result)) { // the while is probably unnecessary
                $currentQuestion =  $row["question"];
                $correctAnswer   =  $row["answer"];
            }
        } else {                                          // if no more questions
            header("Location: result.php");               // go to result page
            die();
        }

        return array($currentQuestion, $correctAnswer);
    }

    public function returnFakeAnswersArray($questionNr, $test) {
        $fakeAnswers      = $this->chooseFakeAnswers($test); // choose fake answer table according to test
        $sql              = "SELECT * FROM $fakeAnswers;";
        $result           = mysqli_query($this->conn, $sql);
        $resultCheck      = mysqli_num_rows($result);
        $fakeAnswersArray = array();

        if($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) { // the while is probably unnecessary
                array_push($fakeAnswersArray, $row["question".$questionNr]);
            }
        }
        return $fakeAnswersArray;
    }

    private function chooseFakeAnswers($test) {
        $testNumber = substr($test, -1);   // if test1 then fakeAnswers1,
        return "fake_answers".$testNumber; // if test7 then fakeAnswers7 etc
    }

    public function returnTests() {             // get all available tests
        $arr    = array();
        $sql    = "SHOW TABLES LIKE '%test%';"; // word "test" has to be in the name
        $result = mysqli_query($this->conn, $sql);
        
        while($table = mysqli_fetch_array($result)) {
            array_push($arr, $table[0]);    
        }
        return $arr;
    }

    public function returnNrOfQuestions($test) {
        $sql    = "SELECT * FROM $test;";
        $result = mysqli_query($this->conn, $sql);
        $result = mysqli_num_rows($result);
        return $result;
    }
}

$db = new Db(); // instatiating the class whenever this file is imported somewhere