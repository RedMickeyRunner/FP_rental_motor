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
        $this->load->view('penyewa_list', $data);
    }
}
