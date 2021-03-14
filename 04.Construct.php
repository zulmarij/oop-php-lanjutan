<?php

class Controller
{

    function __construct()
    {
        echo "Ini di dalam konstruktor Controller!<br/>";
    }
}

class HomeController extends Controller
{

    function __construct()
    {
        parent::__construct();
        echo "Ini di dalam konstruktor HomeController!<br/>";
    }
}

$hc = new HomeController();
