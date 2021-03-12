<?php

abstract class CoordinateAbstract
{
    private $x = 10;
    private $y = 50;

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    abstract public function showMessage();
}

class MouseCoordinate extends CoordinateAbstract
{

    public function showMessage()
    {
        echo "Ini adalah pesan dari Mouse Coordinate<br/>";
    }
}

class GPSCoordinate extends CoordinateAbstract
{

    public function showMessage()
    {
        echo "Ini adalah pesan dari GPS Coordinate<br/>";
    }
}

$mc = new MouseCoordinate();
echo $mc->getX() . "<br/>";
echo $mc->getY() . "<br/>";
echo $mc->showMessage();

$gps = new GPSCoordinate();
echo $gps->getX() . "<br/>";
echo $gps->getY() . "<br/>";
echo $gps->showMessage();

// silahkan komen baris dibawah ini untuk menyembunyikan error

// $coord = new CoordinateAbstract();
// echo $coord->getX()."<br/>";
// echo $coord->getY()."<br/>";
// echo $coord->showMessage();