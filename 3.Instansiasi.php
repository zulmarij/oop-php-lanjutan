<?php
class Persegi
{

    public $panjang;
    public $lebar;

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

// Instansiasi object persgi dari class Persegi
$persegi = new Persegi(10, 5);

// Menjalankan sebuah method
echo "Luas: " . $persegi->hitungLuas() . "<br />";
echo "Keliling: " . $persegi->hitungKeliling() . "<br />";

// Mengatur ulang isi property
$persegi->panjang = 20;
$persegi->lebar = 12;

// Memanggil ulang method dengan properti value yang berbeda, maka hasilnya beda.
echo "Luas: " . $persegi->hitungLuas() . "<br />";
echo "Keliling: " . $persegi->hitungKeliling();
