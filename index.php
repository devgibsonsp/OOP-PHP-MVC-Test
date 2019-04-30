<?php
// Include Config
require('config.php');

// Adding base classes
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');

// Adding controllers
require('controllers/home.php');
require('controllers/users.php');
require('controllers/shares.php');

// Adding models
require('models/home.php');
require('models/user.php');
require('models/share.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
	$controller->executeAction();
}

?>