<?php

class SewaModel extends CI_Model
{
    private $table = 'sewa';

    public function __construct()
    {
        parent::__construct();
    }
    public function get_sewa_join()
    {
        $this->db->select('sewa.*, penyewa.nama as nama_pelanggan, motor.nama as nama_motor');
        $this->db->from('sewa');
        $this->db->join('penyewa', 'penyewa.id = sewa.id_penyewa');
        $this->db->join('motor', 'motor.id = sewa.id_motor');
        $query = $this->db->get();
        return $query->result();
    }
    

    public function get_by_id($id)
    {
        return $this->db->get_where($this->table, array('id' => $id))->row();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function update($id, $data)
    {
        $this->db->update($this->table, $data, array('id' => $id));
    }

    public function delete($id)
    {
        $this->db->delete($this->table, array('id' => $id));
    }
    public function HitungTotalHarga($id_motor)
    {
        $this->db->select('harga_sewa_per_hari');
        $this->db->from('motor');
        $this->db->where('id', $id_motor);
        $query = $this->db->get();
        return $query->row()->harga_sewa_per_hari;
    }
    public function get_total_income()
    {
        $this->db->select_sum('harga_total');
        $query = $this->db->get('sewa');
        return $query->row()->harga_total;
    }

}
