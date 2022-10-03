<?php

require_once 'bentuk2d.php';

class Lingkaran extends Bentuk2D {

    public $jari2;
    public function __construct($jari2) {
        $this->jari2 = $jari2;
    }

    public function namaBidang()
    {
        echo 'Lingkaran';
    }
    public function luasBidang(){
        return (is_float($this->jari2 == true)) ? (number_format(pi() * ($this->jari2 * $this->jari2), 2)) : (number_format(pi() * ($this->jari2 * $this->jari2), 0));
        
    }

    public function kelilingBidang()
    {
        return (is_float($this->jari2 == true)) ? (number_format(pi() * ($this->jari2 + $this->jari2), 2)) : (number_format(pi() * ($this->jari2 + $this->jari2), 2));
    }
}