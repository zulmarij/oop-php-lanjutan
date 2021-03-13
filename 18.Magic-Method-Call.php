<?php
class Overloader
{
    function __call($method, $arguments)
    {
        echo "You called a method named {$method} with the following arguments <br/>";
        print_r($arguments);
        echo "<br/>";
    }
}

$ol = new Overloader();
$ol->access(2, 3, 4);
$ol->notAnyMethod("boo");
