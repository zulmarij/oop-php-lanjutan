<?php

class Persegi
{
    protected $panjang;
    protected $lebar;

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

class Balok extends Persegi
{
    public $tinggi;

    function __construct($p, $l, $t)
    {
        $this->panjang = $p;
        $this->lebar = $l;
        $this->tinggi = $t;
    }

    public function hitungVolume()
    {
        return $this->panjang * $this->lebar * $this->tinggi;
    }

    public function hitungLuasPermukaan()
    {
        return (4 * ($this->panjang * $this->lebar)) + (2 * ($this->lebar * $this->lebar));
    }
}

$p = new Balok(5, 10, 2);

echo "Volume: " . $p->hitungVolume() . "<br />";
echo "Luas Permukaan: " . $p->hitungLuasPermukaan() . "<br />";

// Lepas tanda komentar di bawah baris kode berikut
// $p->panjang = 7;
// $p->lebar = 3;

$p->tinggi = 10;

echo "Volume: " . $p->hitungVolume() . "<br />";
echo "Luas Permukaan: " . $p->hitungLuasPermukaan();
