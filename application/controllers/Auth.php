<?php
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel');
    }
    public function index()
    {
        $this->load->view('auth/login');
    }
    public function dashboard()
    {
        $this->load->view('dashboard');
    }

    public function login()
    {
        if ($this->input->method() == 'post') {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $admin = $this->AdminModel->auth($username, $password);
            if ($admin->num_rows() > 0) {
                $this->session->set_userdata(array(
                    'is_logged_in' => true,
                    'admin_id' => $admin->id,
                    'admin_nama' => $admin->nama,
                ));
                redirect(base_url('dashboard'));
            } else {
                $this->session->set_flashdata('error', 'Username atau password salah');
                redirect('auth/login');
            }
        } else {
            if ($this->session->userdata('is_logged_in')) {
                redirect('dashboard');
            } else {
                $this->load->view('auth/login');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}

?>