<?php include_once("../mysql/dbh.php") ?>

<?php include("partials/header.par.php") ?>

<?php 
    $bobo = 100;
    $name = $_GET["name"];
    $test = $_GET["test"];

    $sql = "SELECT * FROM $test;"; // don't forget ";"
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row["question"] . "<br/>";
        }
    }
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