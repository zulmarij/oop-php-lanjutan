<?php
//method_exists ( mixed $object , string $method_name ) : bool
$directory = new Directory('.');
var_dump(method_exists($directory,'read'));

//property_exists ( mixed $class , string $property ) : bool
class myClass
{
    public $mine;
    private $xpto;
    static protected $test;

    static function test()
    {
        var_dump(property_exists('myClass', 'xpto')); //true
    }
}

var_dump(property_exists('myClass', 'mine'));   //true
var_dump(property_exists(new myClass, 'mine')); //true
var_dump(property_exists('myClass', 'xpto'));   //true

var_dump(property_exists('myClass', 'bar'));    //false
var_dump(property_exists('myClass', 'test'));   //true,
myClass::test();
