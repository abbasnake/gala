
<?php 

// require_once("mysql/dbh.php");

// echo "I am the request: " . $_SERVER["REQUEST_URI"];

define('CSS_PATH', '/mnt/New Volume/Codings/GitStuff/gala/css/style.css');

// root page to /start
if($_SERVER["REQUEST_URI"] == "/"){
    header("Location: /start");
    die();
}

require_once("Routes.php");


// if($_SERVER["REQUEST_METHOD"] == "GET") {
//     // echo $_SERVER["REQUEST_URI"];
//     include("views/start.php");
// }