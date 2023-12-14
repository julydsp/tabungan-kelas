<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class profil_sekolah extends CI_Controller 
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('ModelUser');
        $this->load->library('form_validation');
    }
    public function index() {
        $data['nama'] = $this->session->userdata()['nama'];
        $data['profil'] = $this->ModelSekolah->get_profil()->result_array();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('auth/profil');
        $this->load->view('templates/footer');
        
        
        
    }
    public function edit($id){
        $this->form_validation->set_rules('nama_sekolah','Nama_sekolah', 'trim|required');
        $this->form_validation->set_rules('nama_sekolah','Nama_sekolah', 'trim|required');
        $this->form_validation->set_rules('nama_sekolah','Nama_sekolah', 'trim|required');
        
        if ($this->form_validation->run() == false) {
            $data['sekolah'] = $this->ModelSekolah->get_profil()->row_array();
            $data['profil'] = $this->ModelSekolah->get_profil()->result_array();
            $data['nama'] = $this->session->userdata()['nama'];
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('auth/edit_profil');
            $this->load->view('templates/footer');
            } else {
                $data = [
                    'nama_sekolah' => $this->input->post('nama_sekolah', true),
                    'alamat' => $this->input->post('alamat', true),
                    'akreditasi' => $this->input->post('akreditasi', true),
                ];
                $this->ModelSekolah->edit(['id' => $this->input->post('id')], $data);
                redirect('profil_sekolah');
            }
    }
    
}

