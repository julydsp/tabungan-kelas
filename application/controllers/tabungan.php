<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class tabungan extends CI_Controller 
{

    public function index() {
        $data['profil'] = $this->ModelSekolah->get_profil()->result_array();
        $data['tampil'] = $this->ModelSetor->get_siswa()->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('auth/view_tabungan');
        $this->load->view('templates/footer');
    }
}
