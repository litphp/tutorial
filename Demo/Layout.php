<?php

//yep, layout is just another kind of view
class Demo_Layout extends Demo_View
{
    //override output method,
    public function output()
    {
        $this->body = '';

        //render the header and the footer around the body
        $this->body .= $this->render('header');
        $this->body .= $this->render($this->template);
        $this->body .= $this->render('footer');

        //and do the output
        Lit_Http_View::output();
    }
}
