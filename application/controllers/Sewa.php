<?php

class Sewa extends CI_Controller
{
    private $model;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('SewaModel');
        $this->load->model('PenyewaModel');
        $this->load->model('MotorModel');
    }

    public function index()
    {
        $data['sewa'] = $this->SewaModel->get_sewa_join();
        $this->load->view('sewa/sewa_view', $data);
    }

    public function AddView()
    {
        $data['penyewa'] = $this->PenyewaModel->get_all();
        $data['motor'] = $this->MotorModel->getAll();
        $this->load->view('sewa/sewa_form', array('form_action' => 'add', 'penyewa' 
        => $data['penyewa'], 'motor' => $data['motor']));

    }

    public function EditView($id)
    {
        $data['sewa'] = $this->SewaModel->get_by_id($id);
        $data['penyewa'] = $this->PenyewaModel->get_all();
        $data['motor'] = $this->MotorModel->getAll();
        $this->load->view('sewa/sewa_edit', array('form_action' => 'edit', 'penyewa' 
        => $data['penyewa'], 'motor' => $data['motor']) + $data);
    }


    public function add()
    {
        if ($this->input->method() == 'post') {
            $id_motor = $this->input->post('motor_id');
            $harga_sewa_perhari = $this->SewaModel->HitungTotalHarga($id_motor);
            $tanggal_sewa = new DateTime($this->input->post('tgl_sewa'));
            $tanggal_kembali = new DateTime($this->input->post('tgl_kembali'));
            $selisih = $tanggal_sewa->diff($tanggal_kembali);
            $total_harga = $selisih->days * $harga_sewa_perhari;
            $data = array(
                'id_motor'  => $id_motor,
                'id_penyewa' => $this->input->post('penyewa_id'),
                'tanggal_sewa' => $tanggal_sewa->format('Y-m-d'),
                'tanggal_kembali' => $tanggal_kembali->format('Y-m-d'),
                'harga_total'   => $total_harga
            );
            $this->SewaModel->insert($data);
            redirect(base_url('sewa'));
        } else {
            $this->load->view('sewa/sewa_form', array('form_action' => 'add'));
        }
    }

    public function edit($id)
    {
        $id_sewa = $this->input->post('id_sewa');
        $id_motor = $this->input->post('motor_id');
        $harga_sewa_perhari = $this->SewaModel->HitungTotalHarga($id_motor);
        $tanggal_sewa = new DateTime($this->input->post('tgl_sewa'));
        $tanggal_kembali = new DateTime($this->input->post('tgl_kembali'));
        $selisih = $tanggal_sewa->diff($tanggal_kembali);
        $total_harga = $selisih->days * $harga_sewa_perhari;
        $data = array(
                'id_motor'  => $id_motor,
                'id_penyewa' => $this->input->post('penyewa_id'),
                'tanggal_sewa' => $tanggal_sewa->format('Y-m-d'),
                'tanggal_kembali' => $tanggal_kembali->format('Y-m-d'),
                'harga_total'   => $total_harga
            );
            $this->SewaModel->update($id_sewa, $data);
            redirect(base_url('sewa'));
    }

    public function delete($id)
    {
        $this->SewaModel->delete($id);
        redirect(base_url('sewa'));
    }
    public function get_total_income()
    {
        $total_income = $this->SewaModel->get_total_income();
        return $total_income;
    }

}
