<!DOCTYPE html>
<html>
<head>
    <title>begin|test</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="grid">

        <h1>Testa uzdevums</h1>

        <form action="">
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
         require_once("test/test.php");

         $obj1 = new Bobo(); 
         echo $obj1->getPri();
        ?>
    </div> <!-- grid end -->
</body>
</html>