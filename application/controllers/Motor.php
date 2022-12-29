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
    public function editview()
    {
        $this->load->view('motor/motoredit');
    }

    public function edit($id)
    {
        if ($this->input->method() == 'post') {
            $data = array(
                'nama' => $this->input->post('nama'),
                'tipe' => $this->input->post('tipe'),
                'harga_sewa_per_hari' => $this->input->post('harga_sewa_per_hari'),
                'kondisi' => $this->input->post('kondisi'),
            );
            $this->MotorModel->update($id, $data);
            redirect('motor');
        } else {
            $data['motor'] = $this->MotorModel->getById($id);
            $this->load->view('motor_form', $data);
        }
    }

    public function delete($id)
    {
        $this->MotorModel->delete($id);
        redirect('motor');
    }
}
