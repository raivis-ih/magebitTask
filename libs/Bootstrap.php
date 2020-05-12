<?php

class Bootstrap
{
    function __construct()
    {
        //Gets url from user input

        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        //If nothing is entered after initial website url redirects back to index page

        if (empty($url[0])) {
            require 'controllers/index.php';
            $controller = new index();
            $controller->index();
            return false;
        }

        //Loads controller from entered url and loads it if the file exists

        $file = 'controllers/' . $url[0] . '.php';
        if (file_exists($file)) {
            require $file;
        } else {
            $this->error();
            return false;
        }

        $controller = new $url[0];
        $controller->loadModel($url[0]);

        if (isset($url[2])) {
            if (method_exists($controller, $url[1])) {
                $controller->{$url[1]}($url[2]);
            } else {
                $this->error();
            }
        } else {
            if (isset($url[1])) {
                if (method_exists($controller, $url[1])) {
                    $controller->{$url[1]}();
                } else {
                    $this->error();
                }
            } else {
                $controller->index();
            }
        }
    }

    function error()
    {
        require 'controllers/throwError.php';
        $controller = new throwError();
        $controller->index();
        return false;
    }
}