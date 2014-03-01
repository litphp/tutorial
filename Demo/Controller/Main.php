<?php

//the controller
class Demo_Controller_Main
{
    //the route callback, get the $app as param
    public static function index(Lit_App $app)
    {
        //we show how to use layout view here
        //pass the $template, telling which template we are using
        $result = new Demo_Layout($app, 'index');
        //yep. that's over!

        //tell $app our result
        $app->setResult($result);

        //IMPORTANT: tell $app we finish our job. break the router chain
        return true;
    }

    //another route callback, demonstrating how to catch uri param
    public static function uriparam(Lit_App $app)
    {
        $params = $app->context(Lit_Route_Regex::MATCHES);

        //here's the example for passing some data
        $result = new Demo_View($app, 'uriparam');
        //pass data by the way Demo_View::data() defined
        $result->viewdata['params'] = $params;

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
