<?php

class DB
{
    public function getConnection()
    {
        echo "Memanggil getConnection()...<br/>";
    }

    public function getConfig()
    {
        echo "Memanggil getConfig()...<br/>";
    }
}

class BaseModel extends DB
{
    public function select()
    {
        echo "Melakukan query select...<br/>";
    }

    public function selectByID($id)
    {
        echo "Melakukan query select by id - $id...<br/>";
    }

    public function insert()
    {
        echo "Melakukan query insert...<br/>";
    }

    public function update()
    {
        echo "Melakukan query update...<br/>";
    }

    public function delete()
    {
        echo "Melakukan query delete...<br/>";
    }
}

class TransactionModel extends BaseModel
{
    public function getDailyReport()
    {
        echo "Menghasilkan daily report <br/>";
    }

    public function getMonthlyReport()
    {
        echo "Menghasilkan monly report";
    }
}

class UserModel extends BaseModel
{
    public function authenticate()
    {
        echo "Melakukan authentikasi user <br/>";
    }

    public function changePassword()
    {
        echo "Melakukan penggantian password";
    }

    public function updateProfile()
    {
        echo "Melakukan update password";
    }
}

$tm = new TransactionModel();
$tm->getConnection();
$tm->getConfig();
$tm->select();
$tm->selectByID(10);
$tm->insert();
$tm->update();
$tm->delete();
$tm->getDailyReport();
$tm->getMonthlyReport();

$um = new UserModel();
$um->getConnection();
$um->getConfig();
$um->select();
$um->selectByID(10);
$um->insert();
$um->update();
$um->delete();
$um->authenticate();
$um->changePassword();
$um->updateProfile();
