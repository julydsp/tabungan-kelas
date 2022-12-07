<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class siswa extends CI_Controller 
{
    public function __construct() {
 
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index() {
        $data['profil'] = $this->ModelSekolah->get_profil()->result_array();
        $data['user'] = $this->ModelUser->get_User()->result_array();
        $data['siswa'] = $this->ModelKelas->joinkelas()->result_array();
        // var_dump($data['siswa']); die ;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('auth/view_siswa');
        $this->load->view('templates/footer');
    }
    public function edit_siswa(){
        $this->form_validation->set_rules('nama_siswa','Nama_siswa', 'trim|required');
        
        if ($this->form_validation->run() == false) {
        $data['profil'] = $this->ModelSekolah->get_profil()->result_array();
        $data['tampil'] = $this->ModelKelas->tampil_kelas()->result_array();
        $data['siswa'] = $this->ModelSiswa->edit_siswa($this->uri->segment(3))->row_array();
        $data['nis'] = $this->uri->segment(3);
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('auth/view_edit_siswa');
        $this->load->view('templates/footer');
    } else {
        $data = [
            'nama_siswa' => $this->input->post('nama_siswa', true),
            'jekel' => $this->input->post('jekel', true),
            'id_kelas' => $this->input->post('kelas', true),
            'status' => $this->input->post('status', true),
            'tahun_masuk' => $this->input->post('tahun_masuk', true),
        ];
        $this->ModelSiswa->ubah_siswa(['nis' => $this->input->post('nis')], $data);
        redirect('siswa');
    }
}
    public function add_siswa(){
        $this->form_validation->set_rules('nama_siswa','Nama_siswa', 'required');
        
        if ($this->form_validation->run() == false){
            $data['tampil'] = $this->ModelKelas->tampil_kelas()->result_array();
            $data['profil'] = $this->ModelSekolah->get_profil()->result_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('auth/view_add_siswa');
            $this->load->view('templates/footer');
        }else{
            $post = $this->input->post(null, TRUE);
            $this->ModelSiswa->tambah_siswa($post);
            redirect('siswa');
        }
    }
    public function delete_siswa(){
    
        $where = ['nis' => $this->uri->segment(3)];
        $this->ModelSiswa->delete_siswa($where);
        redirect('siswa');
        }

}
