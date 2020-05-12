<?php

class dashboard extends Controller
{

    function __construct()
    {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        if ($logged == false) {
            Session::destroy();
            header('location: ../index');
            exit;
        }

        $this->view->js = array('dashboard/js/default.js');
    }

    function index()
    {
        $attributes = new dashboard_model();
        $attributes = $attributes->getAll();
        $this->view->render('dashboard/index', $attributes);
    }

    //Function which logs you out of the session and sends you back to index page

    function logout()
    {
        Session::destroy();
        header('location: ../index');
        exit;
    }

    //Function which lets you edit attributes in the dashboard and saves them on the database

    function editUser()
    {
        $user = $_SESSION['id'];
        $attributes = $_POST["attributes"];

        foreach ($attributes as $key => $attribute){
            $dashboard = new dashboard_model();
            $count = $dashboard->save(array("user" => $user, "attribute" => $key + 1, "value" => $attribute));

            if ($count->rowCount() > 0) {
                header('location: ../dashboard');
            }
        }

    }
}