<?php

class Persegi
{
    public $panjang;
    public $lebar;

    function __construct($p, $l)
    {
        $this->panjang = $p;
        $this->lebar = $l;
    }

    public function hitungLuas()
    {
        return $this->panjang * $this->lebar;
    }

    public function hitungKeliling()
    {
        return (2 * $this->panjang) + (2 * $this->lebar);
    }
}

$p = new Persegi(5, 10);

echo "Luas: " . $p->hitungLuas() . "<br />";
echo "Keliling: " . $p->hitungKeliling() . "<br />";

$p->panjang = 20;
$p->lebar = 30;

echo "Luas: " . $p->hitungLuas() . "<br />";
echo "Keliling: " . $p->hitungKeliling();
