<?php

class AdminModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getByUsername($username)
    {
        $query = $this->db->get_where('admin', array('username' => $username));
        return $query->row();
    }
}
