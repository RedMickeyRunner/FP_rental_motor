<?php

class MotorModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $query = $this->db->get('motor');
        return $query->result();
    }

    public function getById($id)
    {
        $query = $this->db->get_where('motor', array('id' => $id));
        return $query->row();
    }

    public function insert($data)
    {
        $this->db->insert('motor', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('motor', $data);
    }

    public function delete($id)
    {
        $this->db->delete('motor', array('id' => $id));
    }
}
