<?php

abstract class Model
{
    function __construct()
    {
        $this->db = new Database();
    }

    abstract public function insert(array $data);

    abstract public function save(array $data);

}