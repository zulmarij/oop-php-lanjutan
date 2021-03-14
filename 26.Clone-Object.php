<?php

//$objCloned = clone $objTarget;
class Hewan
{
    public $nama;
    public $kategori;
}

//Membuat instance dari kelas Hewan
$objHewan = new Hewan();
//Memasukan nilai
$objHewan->nama = "Singa";
$objHewan->kategori = "Hewan Liar";
//Mengclone Object asli
$objCloned = clone $objHewan;
$objCloned->nama = "Serigala";
$objCloned->kategori = "Hewan Liar";
print_r($objHewan);
print_r($objCloned);
