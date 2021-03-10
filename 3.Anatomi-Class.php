<?php

class Lingkaran
{

    private $radius;

    // Method __construct akan dipelajari lebih lanjut di materi kedepan
    function __construct($radius)
    {
        $this->radius = $radius;
    }

    function hitungLuas()
    {
        return 22 / 7 * 2 * $this->radius;
    }

    function hitungKeliling()
    {
        return 22 / 7 * $this->radius * $this->radius;
    }
}