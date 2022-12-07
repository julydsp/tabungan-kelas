<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Setoran extends CI_Controller 
{
    public function __construct() {
 
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index() {
        $data['profil'] = $this->ModelSekolah->get_profil()->result_array();
        $data['setor'] = $this->ModelSetor->jointabungan()->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('auth/setoran');
        $this->load->view('templates/footer');
    }
    public function edit_setoran(){
        $this->form_validation->set_rules('nis','Nis', 'required');
        
        if ($this->form_validation->run() == false) {
        $data['profil'] = $this->ModelSekolah->get_profil()->result_array();
        $data['tampil'] = $this->ModelSetor->get_siswa()->result_array();
        $data['siswa'] = $this->ModelSiswa->edit_siswa($this->uri->segment(3))->row_array();
        $data['nis'] = $this->uri->segment(3);
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('auth/view_edit_setoran');
        $this->load->view('templates/footer');
    } else {
        $data = [
            'nama_siswa' => $this->input->post('nama_siswa', true),
            'jekel' => $this->input->post('jekel', true),
            'kelas' => $this->input->post('kelas', true),
            'status' => $this->input->post('status', true),
            'tahun_masuk' => $this->input->post('tahun_masuk', true),
        ];
        $this->ModelSiswa->ubah_siswa(['nis' => $this->input->post('nis')], $data);
        redirect('siswa');
    }
}
    public function add_setoran(){
        $this->form_validation->set_rules('nis','Nis', 'required');
    
        if ($this->form_validation->run() == false){
            $data['tampil'] = $this->ModelSetor->get_siswa()->result_array();
            $data['profil'] = $this->ModelSekolah->get_profil()->result_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('auth/view_add_setoran');
            $this->load->view('templates/footer');
        }else{
            // var_dump($this->input->post());die;
    
            $post = $this->input->post(null, TRUE);
            $this->ModelSetor->tambah_setor($post);
            redirect('Setoran');
        }
    }
    public function delete_setoran(){
    
        $where = ['nis' => $this->uri->segment(3)];
        $this->ModelSetor->delete_setoran($where);
        redirect('setoran');
    }
}