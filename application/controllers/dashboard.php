<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class dashboard extends CI_Controller 
{
    
    
    public function index() {
        $data['nama'] = $this->session->userdata()['nama'];
        $data['profil'] = $this->ModelSekolah->get_profil()->result_array();
        $data['total'] = $this->ModelSetor->get_total();
        $data['ttl_siswa'] = $this->ModelSiswa->get_total_siswa();

        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('auth/dashboard');
        $this->load->view('templates/footer');
    }
    
}
