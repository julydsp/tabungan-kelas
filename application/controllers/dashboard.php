<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class dashboard extends CI_Controller 
{
    
    
    public function index() {
        $data['profil'] = $this->ModelSekolah->get_profil()->result_array();
        // $data['nama'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        // var_dump($this->session->userdata('email')); die;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('auth/dashboard');
        $this->load->view('templates/footer');
    }
    
}
