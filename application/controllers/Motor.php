<?php

class Motor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MotorModel');
    }

    public function index()
    {
        $data['motors'] = $this->MotorModel->getAll();
        $this->load->view('motor/motor', $data);
    }

    public function addView()
    {
        $this->load->view('motor/motoradd');
    }
    public function add()
    {
        if ($this->input->method() == 'post') {
            $data = array(
                'nama' => $this->input->post('nama'),
                'tipe' => $this->input->post('tipe'),
                'harga_sewa_per_hari' => $this->input->post('harga_sewa_per_hari'),
                'kondisi' => $this->input->post('kondisi'),
            );
            $this->MotorModel->insert($data);
            redirect('motor');
        } else {
            $this->load->view('motor_form');
        }
    }
    public function editview($id)
    {
        $data['motors'] = $this->MotorModel->getById($id);
        $this->load->view('motor/motoredit', $data);
    }

    public function edit()
    {
       $idMotor = $this->input->post('id');
       $namaMotor = $this->input->post('nama');
       $tipeMotor = $this->input->post('tipe');
       $hargasewa = $this->input->post('harga_sewa_per_hari');
       $kondisi = $this->input->post('kondisi');


       $data = array(
        'nama' => $namaMotor,
        'tipe' => $tipeMotor,
        'harga_sewa_per_hari' => $hargasewa,
        'kondisi' => $kondisi
    );
    $this->MotorModel->update($idMotor, $data);
    if ($this->db->affected_rows()) {
        redirect('motor');
    }
    else {
        redirect('motor');
    }
    }

    public function delete($id)
    {
        $this->MotorModel->delete($id);
        redirect('motor');
    }
}
