<?php include_once("../mysql/dbh.php") ?>

<?php include("partials/header.par.php") ?>

<?php 
    // getting values from form in start.php
    $name = $_POST["name"];
    $test = $_POST["test"];

    // getting information from database
    $sql = "SELECT * FROM $test;"; // don't forget ";"
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row["question"] . "<br/>";
        }
    }

    // to save something to database
    // $sql = "INSERT INTO bla bla bla";
    // mysqli_query($conn, $sql);
?>

<div class="testArea">
    <div class="questionDiv">
        <h1 class="question"></h1>
    </div>
    <div class="answerDiv">
        
    </div>
    <div class="progressDiv">
        
    </div>
    <div class="nextDiv">
        <button class="nextButton">Next</button>
    </div>
</div>


<script type="text/javascript" src="../js/test.js"></script>
<?php include("partials/footer.par.php") ?>