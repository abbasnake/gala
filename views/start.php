<?php include("partials/header.par.php") ?>

<h1>INSERT NAME AND CHOOSE TEST</h1>

<form action="../index.php" method="POST">
    <input type="hidden" name="start" value="bobo">
    <input type="text" name="name" placeholder="Name" required>

    <br/>

    <select name="test" required>
        <option hidden>Choose Your Testiny</option>
        <option value="test1">test 1</option>
        <option value="test2">test 2</option>
        <option value="test3">test 3</option>
    </select>

    <br/>

    <input type="submit">
</form> <!-- form end -->

<?php include("partials/footer.par.php") ?>