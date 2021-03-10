<?php

class Hero
{

    protected $healthPoint;
    protected $magicPoint;
    protected $name;

    public function sihir()
    {
        echo "$this->name menyerang dengan sihir<br/>";
    }

    public function serang()
    {
        echo "$this->name menyerang biasa<br/>";
    }

    public function tahan()
    {
        echo "$this->name bertahan dari serangan musuh<br/>";
    }

    public function getHealthPoint()
    {
        return $this->healthPoint;
    }

    public function getMagicPoint()
    {
        return $this->magicPoint;
    }
}

class SunGoKong extends Hero
{

    public function __construct()
    {
        $this->name = "Sun Go Kong";
        $this->healthPoint = 9700;
        $this->magicPoint = 1100;
    }
}

class Susanoo extends Hero
{
    public function __construct()
    {
        $this->name = "Susanoo The King of Light";
        $this->healthPoint = 9850;
        $this->magicPoint = 1280;
    }
}

class Ogre extends Hero
{
    public function __construct()
    {
        $this->name = "Ogre";
        $this->healthPoint = 8700;
        $this->magicPoint = 900;
    }
}

$gokong = new SunGoKong();
$susanoo = new Susanoo();
$ogre = new Ogre();

$gokong->serang();
$gokong->sihir();
$gokong->tahan();
echo "HP: " . $gokong->getHealthPoint() . "<br/>";
echo "MP: " . $gokong->getMagicPoint() . "<br/>";

$susanoo->serang();
$susanoo->sihir();
$susanoo->tahan();
echo "HP: " . $susanoo->getHealthPoint() . "<br/>";
echo "MP: " . $susanoo->getMagicPoint() . "<br/>";

$ogre->serang();
$ogre->sihir();
$ogre->tahan();
echo "HP: " . $ogre->getHealthPoint() . "<br/>";
echo "MP: " . $ogre->getMagicPoint() . "<br/>";
