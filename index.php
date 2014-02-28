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
    //if the request uri match the regex, then call the index callback
    ->regex('#^/$#', array('Demo_Controller_Main', 'index'))
    //show how to get the regex match result
    ->regex('#^/user/(?P<nickname>\w+)$#', array('Demo_Controller_Main', 'uriparam'))
    //if regex failed to catch the request, this route show the 404page
    ->any(array('Demo_Controller_Main', 'notFound'));

//run app
$app->run();
