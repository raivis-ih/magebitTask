<?php

class Controller
{
    function __construct()
    {
        $this->view = new View();
    }

    //Gets inputted url and loads it's model if it exists

    public function loadModel($name)
    {
        $path = 'models/' . $name . '_model.php';
        if (file_exists($path)) {
            require 'models/' . $name . '_model.php';
            $modelName = $name . '_model';
            $this->model = new $modelName();
        }
    }
}