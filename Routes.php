
<?php
include("classes/Route.php");
include("controllers/controller.php");
include("controllers/start.php");
include("controllers/test.php");
 // echo $_SERVER["REQUEST_URI"];

Route::set("/start", function() {
    Start::CreateView("start");
});

Route::set("/test", function() {
    Test::CreateView("test");
});