<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Kelas extends CI_Controller 
{
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }
    
    public function index() {
        $data['profil'] = $this->ModelSekolah->get_profil()->result_array();
        $data['kelas'] = $this->ModelKelas->tampil_kelas()->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('auth/view_kelas');
        $this->load->view('templates/footer');
    }
    public function edit_kelas(){
        $this->form_validation->set_rules('kelas','Kelas', 'trim|required');
        
        if ($this->form_validation->run() == false) {
            $data['profil'] = $this->ModelSekolah->get_profil()->result_array();
            $data['kelas'] = $this->ModelKelas->get_kelas($this->uri->segment(3))->result_array();
            $data['id_kelas'] = $this->uri->segment(3);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('auth/view_edit_kelas');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'kelas' => $this->input->post('kelas', true),
            ];
            $this->ModelKelas->editkelas(['id_kelas' => $this->input->post('id_kelas')], $data);
            redirect('kelas');
        }
    }
    public function add_kelas(){
        $this->form_validation->set_rules('kelas','Kelas', 'required');
        
        if ($this->form_validation->run() == false){
            $data['profil'] = $this->ModelSekolah->get_profil()->result_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('auth/add_kelas');
            $this->load->view('templates/footer');
        
        } else{
            $post = $this->input->post(null, TRUE);
            $this->ModelKelas->tambah_kelas($post);
            redirect('kelas');
        }

    }
    public function delete_kelas(){
    
        $where = ['id_kelas' => $this->uri->segment(3)];
        $this->ModelKelas->delete_kelas($where);
        redirect('kelas');
        }
}

