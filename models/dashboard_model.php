<?php

class dashboard_model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(array $data)
    {

    }

    //Executes query which inserts information into table user_info

    public function save(array $data)
    {
        $statement = $this->db->prepare("INSERT INTO user_info (user, attribute, value) VALUES (:loggedId, :attributes, :value)");

        $statement->execute(array(
            ':loggedId' => $data['user'],
            ':attributes' => $data['attribute'],
            ':value' => $data['value']
        ));
        return $statement;
    }

    //Executes query which gets all information from table attributes and executes another query if there's an 'option' attribute and then pushes it into an array

    public function getAll()
    {
        $statement = $this->db->prepare("SELECT * from attributes1;");
        $statement->execute();
        $statement = $statement->fetchAll(PDO::FETCH_ASSOC);

        foreach ($statement as $key => $attribute) {
            if ($attribute['type'] == 'option') {
                $query = $this->db->prepare("SELECT * FROM options WHERE attribute = :attribute");
                $query->execute(array(':attribute' => $attribute['id']));
                $query = $query->fetchAll(PDO::FETCH_ASSOC);
                array_push($statement[$key], $query);
            }
        }
        return $statement;
    }
}
