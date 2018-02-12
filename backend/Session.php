<?php

/*
dealing with all the session variables in this class
although I think it needlessly complicates and bloats 
things
THE CLASS IS INITIALIZED AT THE BOTTOM OF THIS PAGE
*/

class Session {
    public function __construct(){
        session_start();
    }

    public function setQuestionNr($num) {
        $_SESSION["questionNr"] = $num;
    }

    public function incrementQuestionNr() {
        $_SESSION["questionNr"]++;
    }

    public function returnQuestionNr() {
        return $_SESSION["questionNr"];
    }

    public function setQuestionCount($num) {
        $_SESSION["questionCount"] = $num;
    }

    public function returnQuestionCount() {
        return $_SESSION["questionCount"];
    }

    public function setUserScore() {
        $_SESSION["userCorrect"] = 0;
        $_SESSION["userIncorrect"] = 0;
    }

    public function incrementCorrect() {
        $_SESSION["userCorrect"]++;
    }

    public function incrementIncorrect() {
        $_SESSION["userIncorrect"]++;
    }

    public function returnUserScore() {
        $correct = $_SESSION["userCorrect"];
        $incorrect = $_SESSION["userIncorrect"];
        return array($correct, $incorrect);
    }

    public function setUserName($user) {
        $_SESSION["name"] = $user;
    }

    public function returnUserName() {
        return $_SESSION["name"];
    }

    public function setTest($test) {
        $_SESSION["test"] = $test;
    }

    public function returnTest() {
        return $_SESSION["test"];
    }

    public function end() {
        session_unset();
        session_destroy();
    }
}

$session = new Session(); // initializing class