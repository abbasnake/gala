
<?php 

class Bobo {
    public $pub = "I am public!";
    private $pri = "I am private";

    public function getPub() {
        return $this->pub;
    }

    public function getPri() {
        return $this->pri;
    }
}

?>
