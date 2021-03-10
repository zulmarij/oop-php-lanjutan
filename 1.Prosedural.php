<?php

function hitungLuas($p, $l)
{
    return $p * $l;
}

function hitungKeliling($p, $l)
{
    return (2 * $p) + (2 * $l);
}

$panjang = 10;
$lebar = 5;
echo "Luas: " . hitungLuas($panjang, $lebar) . "<br />";
echo "Keliling: " . hitungKeliling($panjang, $lebar);
