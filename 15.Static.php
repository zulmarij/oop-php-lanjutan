<?php
//class.statictester.php
class StaticTester
{
    private static $id = 0;

    function __construct()
    {
        self::$id += 1;
    }

    public static function checkIdFromStaticMehod()
    {
        echo "Current Id From Static Method is " . self::$id . "<br />";
    }

    public function checkIdFromNonStaticMethod()
    {
        echo "Current Id From Non Static Method is " . self::$id . "<br />";
    }
}

$st1 = new StaticTester();
StaticTester::checkIdFromStaticMehod();
$st2 = new StaticTester();
$st1->checkIdFromNonStaticMethod(); //returns the val of $id as 2
$st1->checkIdFromStaticMehod();
$st2->checkIdFromNonStaticMethod();
$st3 = new StaticTester();
StaticTester::checkIdFromStaticMehod();
