<?php
/**
 * Created by PhpStorm.
 * User: tharindu
 * Date: 6/18/18
 * Time: 5:09 PM
 */

require 'config.php';

require 'classes/Bootstrap.php';
require 'classes/Controller.php';

require 'controllers/home.php';
require 'controllers/shares.php';
require 'controllers/users.php';

$bootstrap = new Bootstrap($_GET);

$controller = $bootstrap->createController();

if($controller){
    $controller->executeAction();
}