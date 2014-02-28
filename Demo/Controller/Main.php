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
        $result->body = <<<HTML
<a href="/user/jack">/user/jack</a>
<br>
<a href="/404">/404</a>
HTML;


        //tell $app our result
        $app->setResult($result);

        //IMPORTANT: tell $app we finish our job. break the router chain
        return true;
    }

    //another route callback, demonstrating how to catch uri param
    public static function uriparam(Lit_App $app)
    {
        $params = $app->context(Lit_Route_Regex::MATCHES);

        $result = new Lit_Http_View($app);
        $result->body = var_export($params, true);

        $app->setResult($result);

        return true;
    }

    //another route callback for 404page
    public static function notFound(Lit_App $app)
    {
        $result = new Lit_Http_View($app);
        $result->body = '<h1>Not Found</h1>';
        //set $result->status to change the http status code
        $result->status = 404;

        $app->setResult($result);
    }
} 