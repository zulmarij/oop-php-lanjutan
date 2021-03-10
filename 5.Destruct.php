<?php

class DB
{

    private $dbConnectionStatus = "close";

    function __construct()
    {
        $this->dbConnectionStatus = "connecting";
    }

    function connect()
    {
        $this->dbConnectionStatus = "open";
    }

    function getConnectionStatus()
    {
        return $this->dbConnectionStatus;
    }

    function __destruct()
    {
        $this->dbConnectionStatus = "close";
        echo "status: " . $this->dbConnectionStatus . "<br/>";
    }
}

$db = new DB();
echo $db->getConnectionStatus() . "<br/>";
$db->connect();
echo $db->getConnectionStatus() . "<br/>";
