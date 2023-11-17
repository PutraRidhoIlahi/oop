<?php

require_once 'Animal.php';
class Ape extends Animal {
    public function yell() {
        echo "Auooo\n";
    }
    public $legs = 2;
}

?>
