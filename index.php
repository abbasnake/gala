<?php 
    session_start();
    // this is to reset question number whenever
    // a new user does a test. It is set to 0
    // because it increments each time the test
    // page is reloaded
    $_SESSION["questionNr"] = 0;
?>

<?php include("partials/header.php") ?> <!-- html header -->

<h1>ENTER NAME AND CHOOSE YOUR TESTINY</h1>

<form action="backend/getTest.php" method="POST">
    <input type="text" name="name" placeholder="name" required>
    <br>
    <select name="test">
        <option value="test1">test 1</option>
        <option value="test2">test 2</option>
        <option value="test3">test 3</option>
    </select>
    <br>
    <input type="submit">
</form>

<?php include("partials/footer.php") ?> <!-- html footer -->