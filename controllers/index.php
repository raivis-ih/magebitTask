<?php

class index extends Controller
{

    function __construct()
    {
        parent::__construct();

        $this->view->js = array('index/js/default.js');
    }

    function index()
    {
        $this->view->render('index/index');
    }

    //Function which logs you in and sends you to dashboard if it was successful, if not sends you back to index page

    function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = new index_model();
        $count = $user->select(array("email" => $email, "password" => $password));

        $id = $count->fetchAll(PDO::FETCH_ASSOC);

        if ($count->rowCount() > 0) {
            Session::init();
            Session::set('loggedIn', true);
            $_SESSION['id'] = $id[0]["id"];
            header('location: ../dashboard');
        } else {
            header('location: ../index');
        }
    }

    //Function which registers your account and sends you to dashboard if all the requirements are met, if not sends you back to index page

    function signup()
    {
        $username = $_POST['regusername'];
        $email = $_POST['regemail'];
        $password = $_POST['regpassword'];


        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $user = new index_model();
            $count = $user->insert(array("username" => $username, "email" => $email, "password" => $password));

            $id = $count->fetchAll(PDO::FETCH_ASSOC);

            if ($count->rowCount() > 0) {
                Session::init();
                Session::set('loggedIn', true);
                $_SESSION['id'] = $id[0]["id"];
                header('location: ../dashboard');
            } else {
                header('location: ../index/');
            }
        }
    }
}