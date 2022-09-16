<?php

class UserModel extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function users()
    {
        return $this->db->get('users')->result();
    }

    public function store($data)
    {
        $this->db->insert('users', $data);
    }

    public function fetchUserById($id)
    {
        return $this->db->get_where('users', array('id' => $id))->row();
    }

    public function update($data, $id)
    {
        $this->db->update('users', $data, array('id' => $id));
    }
}