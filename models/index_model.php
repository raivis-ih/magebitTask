<?php

class index_model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //Executes query which inserts information into table users

    public function insert(array $data)
    {
        $statement = $this->db->prepare("INSERT INTO users (username, email, password) VALUES (:regusername, :regemail, :regpassword)");

        $statement->execute(array(
            ':regusername' => $data['username'],
            ':regemail' => $data['email'],
            ':regpassword' => $data['password']
        ));
        return $statement;
    }

    public function save(array $data)
    {

    }

    //Executes query which gets users id if the inputted email and password matches

    public function select(array $data)
    {
        $statement = $this->db->prepare("SELECT id FROM users WHERE email = :email AND password = :password");

        $statement->execute(array(':email' => $data['email'], ':password' => $data['password']));
        return $statement;
    }
}