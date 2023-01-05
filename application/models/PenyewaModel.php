<?php

class PenyewaModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all()
    {
        $query = $this->db->get('penyewa');
        return $query->result();
    }

    public function get_by_id($id)
    {
        $query = $this->db->get_where('penyewa', array('id' => $id));
        return $query->row();
    }

    public function insert($data)
    {
        $this->db->insert('penyewa', $data);
    }

    public function update($id, $data)
    {
        $this->db->update('penyewa', $data, array('id' => $id));
    }

    public function delete($id)
    {
        $this->db->delete('penyewa', array('id' => $id));
    }
}
