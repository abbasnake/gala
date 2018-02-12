<?php 
require_once("../backend/Session.php"); // creates $session object
$session->setQuestionNr(0);             // keeping track of current question
$session->setUserScore();               // sets both correct and incorrect answer count to 0
require_once("../db/Db.php");           // initialize database class
$testArray = $db->returnTests();        // getting tests from db
?>

<?php include("partials/header.php") ?> <!-- html header -->

<form class="form" action="../backend/testLogic.php" method="POST">

    <div class="form-title">CHOOSE YOUR TESTINY</div>

    <div class="form-name">
        name: <input class="form-name-input" type="text" name="name" value="stinky" required>
    </div>

    <div class=form-select>
        test: 
        <select class="form-select-input" name="test" required>
            <option value="">choose stinky</option>
            <?php for($i = 0; $i < count($testArray); $i++): ?>
                <option value="<?php echo $testArray[$i] ?>">
                    <?php echo $testArray[$i] ?>  
                </option>
            <?php endfor; ?>
        </select>
    </div>

    <button class="form-submit" type="submit">Go</button>

</form>

<?php include("partials/footer.php") ?> <!-- html footer -->