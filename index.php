<?php

// Start Session
session_start();

// Include Config
require('config.php');

// Adding classes
require('classes/Messages.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');

// Adding controllers
require('controllers/home.php');
require('controllers/users.php');
require('controllers/shares.php');
require('controllers/courses.php');

// Adding models
require('models/home.php');
require('models/user.php');
require('models/share.php');
require('models/course.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
	$controller->executeAction();
}

?>