<?php

class Car
{
    private $wheel;
    private $machine;
    private $seat;

    public function setWheel($wd)
    {
        $this->wheel = $wd;
    }

    public function setMachine($machine)
    {
        $this->machine = $machine;
    }

    public function setSeat($seat)
    {
        $this->seat = $seat;
    }

    public function getWheel()
    {
        return $this->wheel;
    }

    public function getMachine()
    {
        return $this->machine;
    }

    public function getSeat()
    {
        return $this->seat;
    }
}

class Truck extends Car
{

    public function __construct()
    {
        echo "Object Truck dibuat ...<br/>";
    }
}

class Excavator extends Car
{

    public function __construct()
    {
        echo "Object Excavator dibuat ...<br/>";
    }
}

class SportCar extends Car
{

    public function __construct()
    {
        echo "Object SportCar dibuat ...<br/>";
    }
}

$t = new Truck();
$t->setWheel(6);
$t->setMachine("mesin truk");
$t->setSeat(2);
echo "Wheel: " . $t->getWheel() . "<br/>";
echo "Machine: " . $t->getMachine() . "<br/>";
echo "Seat: " . $t->getSeat() . "<br/>";

$e = new Excavator();
$e->setWheel(8);
$e->setMachine("mesin excavator");
$e->setSeat(1);

// Pasang tanda komentar di bawah baris kode berikut
$e->wheel = 8;
$e->seat = 6;
print_r($e);
echo "<br/>";

echo "Wheel: " . $e->getWheel() . "<br/>";
echo "Machine: " . $e->getMachine() . "<br/>";
echo "Seat: " . $e->getSeat() . "<br/>";

$s = new SportCar();
$s->setWheel(4);
$s->setMachine("mesin sport car v4");
$s->setSeat(2);
echo "Wheel: " . $s->getWheel() . "<br/>";
echo "Machine: " . $s->getMachine() . "<br/>";
echo "Seat: " . $s->getSeat() . "<br/>";
