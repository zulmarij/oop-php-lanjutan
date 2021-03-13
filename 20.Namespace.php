<?php

require "Nemspes/Controller/controller.php";
require "Nemspes/Model/model.php";

use Nemspes\Controller\HomeController;
use Nemspes\Model\UserModel;

$controller = new HomeController();
$controller->index();

// buka komentar dibawah ini untuk melihat error

// $model = new \Codepolitan\Model\UserModel();
// $model->selectAll();

$model = new UserModel();
$model->selectAll();