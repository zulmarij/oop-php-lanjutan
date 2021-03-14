<?php

//get_class ([ object $object ] ) : string
class foo
{
    function name()
    {
        echo "My name is ", get_class($this), "<br />";
    }
}

// create an object
$bar = new foo();

// external call
echo "Its name is ", get_class($bar), "<br />";

// internal call
$bar->name();

// is_a ( mixed $object , string $class_name [, bool $allow_string = FALSE ] ) : bool
class ParentClass
{
}

class ChildClass extends ParentClass
{
}

$cc = new ChildClass();
if (is_a($cc, "ChildClass")) echo "It's a ChildClass Type Object";
echo "<br />";
if (is_a($cc, "ParentClass")) echo "It's also a ParentClass Type 
Object";
