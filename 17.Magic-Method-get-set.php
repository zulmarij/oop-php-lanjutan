<?php
// Class.student.php
class Student
{
    private $properties = array();

    function __get($property)
    {
        return $this->properties[$property];
    }

    function __set($property, $value)
    {
        $this->properties[$property] = "AutoSet {$property} as: " . $value;
    }
}

$st = new Student();
$st->name = "Afif";
$st->roll=16;
echo $st->name."<br />";
echo $st->roll;