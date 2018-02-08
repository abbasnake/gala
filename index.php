
<?php 
// header("Location: views/start.php");
// die();
require_once("mysql/dbh.php");

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    header("Location: views/start.php");
    die();
} else {

    $postreq = $_POST["start"];
    echo $postreq;
    // if ($_POST["url"] == "/views/start.php") {
    //     header("Location: views/test.php");
    //     die();

    // } else {
    //     echo "some other POST REQUEST, hello from index.php";
    // }
    
}
