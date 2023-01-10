<?php

class Sewa extends CI_Controller
{
    private $model;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('SewaModel');
    }

    public function index()
    {
    $this->load->model('SewaModel');
    $data['sewa'] = $this->SewaModel->get_all();
    $this->load->view('sewa/sewa_list', $data);
    }

    public function AddView()
    {
    $this->load->view('sewa/sewa_form', array('form_action' => 'add'));
    }

public function EditView($id)
{
    $data['sewa'] = $this->model->get_by_id($id);
    $this->load->view('sewa/sewa_form', array('form_action' => 'edit') + $data);
}


    public function add()
    {
        if ($this->input->method() == 'post') {
            $data = array(
                'motor_id' => $this->input->post('motor_id'),
                'penyewa_id' => $this->input->post('penyewa_id'),
                'tgl_sewa' => $this->input->post('tgl_sewa'),
                'tgl_kembali' => $this->input->post('tgl_kembali'),
                'harga_sewa' => $this->input->post('harga_sewa')
            );
            $this->model->insert($data);
            redirect(base_url('sewa'));
        } else {
            $this->load->view('sewa/sewa_form', array('form_action' => 'add'));
        }
    }

    public function edit($id)
    {
        if ($this->input->method() == 'post') {
            $data = array(
                'motor_id' => $this->input->post('motor_id'),
                'penyewa_id' => $this->input->post('penyewa_id'),
                'tgl_sewa' => $this->input->post('tgl_sewa'),
                'tgl_kembali' => $this->input->post('tgl_kembali'),
                'harga_sewa' => $this->input->post('harga_sewa')
            );
            $this->model->update($id, $data);
            redirect(base_url('sewa'));
        } else {
            $data['sewa'] = $this->model->get_by_id($id);
            $this->load->view('sewa/sewa_form', array('form_action' => 'edit') + $data);
        }
    }

    public function delete($id)
    {
        $this->model->delete($id);
        redirect(base_url('sewa'));
    }
}
