<?php

class View
{
    function __construct()
    {
    }

    //Renders the specified view and data if such is needed

    public function render($name, $data = null)
    {
        require 'views/header.php';
        require 'views/' . $name . '.php';
        require 'views/footer.php';
    }
}