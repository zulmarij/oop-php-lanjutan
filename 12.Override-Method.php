<?php

class Animal {

    public function speak() {
        echo "Hewan sedang bersuara!<br/>";
    }
}

class Dog extends Animal {

    public function speak() {
        echo "Guk guk guk guk!<br/>";
    }

    public function verboseSpeak()
    {
        parent::speak();
        $this->speak();
    }
}

$d = new Dog();
$d->speak();
$d->verboseSpeak();