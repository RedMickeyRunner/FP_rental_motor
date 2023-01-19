<?php

class Penyewa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PenyewaModel');
    }

    public function index()
    {
        $data['penyewa'] = $this->PenyewaModel->get_all();
        $this->load->view('penyewa/penyewaView', $data);
    }
    public function addView()
    {
        $this->load->view('penyewa/addPenyewa');
    }
    public function add()
    {
        if ($this->input->method() == 'post') {
            $data = array(
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'no_telepon' => $this->input->post('no_telp'),
            );
            $this->PenyewaModel->insert($data);
            redirect('penyewa/');
        } else {
            $this->load->view('penyewa/penyewaView');
        }
    }
    public function editview($id)
    {
        $data['penyewa'] = $this->PenyewaModel->get_by_id($id);
        $this->load->view('penyewa/penyewaEdit', $data);
    }
    public function edit()
    {
        $idPenyewa = $this->input->post('id');
        $namaPenyewa = $this->input->post('nama');
        $alamatPenyewa = $this->input->post('alamat');
        $no_telepon = $this->input->post('no_telp');
 
 
        $data = array(
         'id' => $idPenyewa,
         'nama' => $namaPenyewa,
         'alamat' => $alamatPenyewa,
         'no_telepon' => $no_telepon
        );
        $this->PenyewaModel->update($idPenyewa, $data);
        if ($this->db->affected_rows() > 0) {
            redirect('penyewa');
        }
        else {
             redirect('penyewa');
        }
    }

    public function delete($id)
    {
        $this->PenyewaModel->delete($id);
        redirect('penyewa');
    }

}
