<?php
//import LitPHP
require('lit/lit.inc.php');

//define project root
define('DEMO_ROOT', dirname(__FILE__));
//register autoloader
Lit_Autoloader::register(DEMO_ROOT);

//create $app instance
$app = new Lit_App();

//get the router
$app->router()
    //insert a route: for any request, call `Demo_Controller_Main::index`
    ->any(array('Demo_Controller_Main', 'index'));

//run app
$app->run();
