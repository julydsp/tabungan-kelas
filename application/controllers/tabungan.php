<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class tabungan extends CI_Controller 
{

    public function index() {
        $data['profil'] = $this->ModelSekolah->get_profil()->result_array();
        $data['tampil'] = $this->ModelSetor->get_siswa()->result_array();
        $data['nama'] = $this->session->userdata()['nama'];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('auth/view_tabungan');
        $this->load->view('templates/footer');
    }
    
    public function data_tabungan(){
        $nis= $this->input->post('nis', true);
        $data['profil'] = $this->ModelSekolah->get_profil()->result_array();
        $data['total']= $this->ModelTab->get_tab_siswa($nis);
        $data['nama'] = $this->session->userdata()['nama'];
        $data['setor'] = $this->ModelSetor->join($nis)->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('auth/view_data_tabungan');
        $this->load->view('templates/footer');
     }

}
