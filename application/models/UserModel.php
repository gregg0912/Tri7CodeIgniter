<?php

class UserModel extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function users()
    {
        return array(
            array(
                "id" => 1,
                "first_name" => "Mark",
                "last_name" => "Otto",
                "position" => "Web Developer",
                "create_date" => "2021-02-23"
            ),
            array(
                "id" => 2,
                "first_name" => "Marky",
                "last_name" => "Ave",
                "position" => "Web Design",
                "create_date" => "2021-02-23"
            )
        );
    }

    public function store($data)
    {
        $this->db->insert('users', $data);
    }
}