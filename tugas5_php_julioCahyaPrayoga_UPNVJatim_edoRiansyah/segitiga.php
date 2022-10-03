<?php

require_once 'bentuk2d.php';

class Segitiga extends Bentuk2D {

    public $alas;
    public $tinggi;

    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function namaBidang()
    {
        return 'Segitiga Siku-siku';
    }

    public function luasBidang()
    {
        return (is_float($this->alas) == true || is_float($this->tinggi) == true) ? (number_format(($this->alas * $this->tinggi), 2)) : number_format($this->alas * $this->tinggi, 0);
    }

    public function kelilingBidang()
    {
        $sisi = sqrt(($this->tinggi * $this->tinggi) + ($this->alas * $this->alas));
        return $sisi +$this->alas + $this->tinggi;
    }
}