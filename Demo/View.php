<?php

//define our view class
class Demo_View extends Lit_Http_View_Template
{
    public $viewdata = array();

    //template method should return a template engine instance
    protected function template()
    {
        return new Demo_Template();
    }

    //data method should return $data for Lit_ITemplate::render
    protected function data()
    {
        return $this->viewdata;
    }
}
