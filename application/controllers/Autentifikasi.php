<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Autentifikasi extends CI_Controller 
{
    
    public function index(){
        
    $this->form_validation->set_rules('email', ' Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'trim|required|');

    if ($this->form_validation->run() == false) {
        $data['title']='TABUNGAN SISWA | LOGIN';
        $this->load->view('templates/auth_header', $data);
        // $this->load->view('templates/topbar');
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    } else {
        $this->_login();
    }
}
    private function _login() {
    
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
    
        if($user) {
            if(password_verify($password, $user['password'])) {
                    redirect('dashboard');
            } else {
                $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
                Password Anda Salah</div>');
                redirect('Autentifikasi');
            }
        }
    }
}
