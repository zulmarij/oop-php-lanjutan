<?php

//class_exists()
if (class_exists('MyClass')) {
    $myclass = new MyClass();
}

//autoload
function __autoload($class)
{
    include($class . '.php');

    // Pengecekan apabila class telah didefinisikan
    if (!class_exists($class, false)) {
        trigger_error("Unable to load class: $class", E_USER_WARNING);
    }
}

if (class_exists('MyClass')) {
    $myclass = new MyClass();
}

//get_declared_classes()
print_r(get_declared_classes());