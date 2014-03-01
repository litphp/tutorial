<?php

//implement our template engine
class Demo_Template implements Lit_ITemplate
{
    //render method got $template and $data as parameter
    public function render($template, $data)
    {
        extract($data);

        ob_start();
        include(DEMO_ROOT . "/template/$template.php");

        //and return rendered result string
        return ob_get_clean();
    }
}
