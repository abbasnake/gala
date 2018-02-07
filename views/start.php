<?php include("partials/header.par.php") ?>

<h1>INSERT NAME AND CHOOSE TEST</h1>

<form action="test.php" method="POST">
    <input type="text" name="name" placeholder="Name" required>

    <br/>

    <select name="test" required>
        <option hidden>Choose Your Testiny</option>
        <option value="test_1">test 1</option>
        <option value="test_2">test 2</option>
        <option value="test_3">test 3</option>
        <option value="test_4">test 4</option>
    </select>

    <br/>

    <input type="submit">
</form> <!-- form end -->

<?php
    // require_once("test/test.php");
    // echo Bobo::$static; //no need to create object for static properties/methods
    // $obj1 = new Bobo(); 
    // echo $obj1->getPri();
    // echo $obj1; // __toString() handles this
    // unset($obj1); //kills the object
?>

<?php include("partials/footer.par.php") ?>