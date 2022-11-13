<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Auth extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('Auth/login'); 
        $this->load->view('templates/auth_footer');
    }
    
    
    public function registrasi()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'TABUNGAN SISWA | REGISTRASI';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registrasi');
            $this->load->view('templates/auth_footer');
        } else {
             echo 'selamat datang' ;
        }
        
    }
}