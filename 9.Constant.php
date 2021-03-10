<?php
class HitungLingkaran
{
    const PHI = 3.14;  // Kamu gak harus pakai dollar untuk membuat konstanta
    public $jari;
    public $luas;

    // Setter jari jari.
    public function setJari($jari)
    {
        $this->jari = $jari;
    }

    public function hitung()
    {
        // Menghitung luas.
        $this->luas = self::PHI * ($this->jari ^ 2);
        return $this->luas;
    }
}

// Kita instansiasi 
$lingkaran = new HitungLingkaran;

// Kita set jarinya.
$lingkaran->setJari(5);

// Lalu hitung
echo $lingkaran->hitung();
