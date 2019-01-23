<?php
$task = $_GET['task'];
require_once('controllers/PeopleController.php');
$controller = new PeopleController();
$controller->$task();


