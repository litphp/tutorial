<?php

//the controller
class Demo_Controller_Main
{
    //the route callback, get the $app as param
    public static function index(Lit_App $app)
    {
        //create an HTTP View result
        $result = new Lit_Http_View($app);
        //set the HTTP body
        $result->body = "Hello, World!";

        //tell $app our result
        $app->setResult($result);
    }
} 