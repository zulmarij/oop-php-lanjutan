<?php
// require "Autoloading/classA.php";
// require "Autoloading/classB.php";

spl_autoload_register(function ($class_name) {
    include 'Autoloading/'.$class_name.'.php';
});

$clsA = new ClassA();
$clsB = new ClassB();

$clsA->showMessage();
$clsB->showMessage();
