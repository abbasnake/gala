<?php 
session_start();

/*
this is to reset question number whenever
a new user does a test. It is set to 0
because it increments each time the test
page is reloaded
*/
$_SESSION["questionNr"]    = 0;
$_SESSION["userCorrect"]   = 0;
$_SESSION["userIncorrect"] = 0;
?>


<?php include("partials/header.php") ?> <!-- html header -->

<div class="title">choose your testiny</div>

<form class="form" action="backend/testLogic.php" method="POST">
    <input class="form-input" type="text" name="name" placeholder="enter name" required>
    <br>
    <select class="form-select" name="test">
        <option value="test1">test 1</option>
        <option value="test2">test 2</option>
        <option value="test3">test 3</option>
    </select>
    <br>
    <input class="form-submit" type="submit">
</form>

<?php include("partials/footer.php") ?> <!-- html footer -->