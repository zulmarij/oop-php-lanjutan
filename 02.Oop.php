<?php

class Persegi
{

    private $panjang;
    private $lebar;

    function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    function hitungLuas()
    {
        return $this->panjang * $this->lebar;
    }

    function hitungKeliling()
    {
        return (2 * $this->panjang) + (2 * $this->lebar);
    }
}

$persegi = new Persegi(5, 10);
echo "Luas: " . $persegi->hitungLuas() . "<br />";
echo "Keliling: " . $persegi->hitungKeliling();
