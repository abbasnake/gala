<?php 
    $dbServername = "localhost";
    $dbUserName = "root";
    $dbPassword = "database";
    $dbName = "printful_test";


    $conn = mysqli_connect( // mysqli not mysql
        $dbServername,
        $dbUserName,
        $dbPassword,
        $dbName
    );
?>