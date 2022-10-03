<?php

require_once 'bentuk2d.php';

class PersegiPanjang extends Bentuk2D {

    public $panjang;
    public $lebar;

    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function namaBidang()
    {
        return 'Persegi Panjang';
    }
    public function luasBidang()
    {
        return (is_float($this->panjang) == true || is_float($this->lebar) == true) ? number_format(($this->panjang * $this->lebar), 2) : number_format(($this->panjang * $this->lebar), 0);
    }

    public function kelilingBidang()
    {
        return (is_float($this->panjang) == true || is_float($this->lebar) == true) ? number_format((2 * ($this->panjang + $this->lebar)), 2) : number_format((2 * ($this->panjang + $this->lebar)), 0);
    }
}