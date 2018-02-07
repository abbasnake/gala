
<?php 

class Bobo {
    public $pub = "I am public!";
    private $pri = "I am private";
    // __CLASS__ gets the class name
    public $error = "This is the class called".__CLASS__."!";

    // sttic means it can be instantiated without calling the class
    public static $static = 0;

    //initializer
    public function __construct() {
        echo "This class has been initialized";
    }

    // if echo the object then this method is run
    public function __toString() {
        echo "toString method: ";
        return $this->error;
    }

    public function getPub() {
        return $this->pub;
    }

    public function getPri() {
        return $this->pri;
    }

    // when class has loaded
    public function __destruct() {
        echo "This class has done it's work";
    }
}

?>
