<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class pengguna_sistem extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ModelUser');
        $this->load->library('form_validation');
    }
    
    
    

    public function index() {
        $data['profil'] = $this->ModelSekolah->get_profil()->result_array();
        $data['user'] = $this->ModelUser->get_User()->result_array();
        $data['pengguna'] = $this->ModelUser->get_pengguna()->result_array();
        $data['nama'] = $this->session->userdata()['nama'];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('auth/view_pengguna_sistem');
        $this->load->view('templates/footer');
    }

    public function edit_pengguna(){
        $this->form_validation->set_rules('nama','Nama', 'trim|required');
        
 
        if ($this->form_validation->run() == false) {
        $data['profil'] = $this->ModelSekolah->get_profil()->result_array();
        $data['user'] = $this->ModelUser->get_User($this->uri->segment(3))->row_array();
        $data['id_user'] = $this->uri->segment(3);
        $data['nama'] = $this->session->userdata()['nama'];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('auth/edit_pengguna');
        $this->load->view('templates/footer');
    } else {
        $data = [
            'nama' => $this->input->post('nama', true),
            'email' => $this->input->post('email', true),
            'password' => $this->input->post('password', PASSWORD_DEFAULT),
            'level' => $this->input->post('level', true),
        ];
        $this->ModelUser->editpengguna(['id_user' => $this->input->post('id_user')], $data);
        redirect('pengguna_sistem');
    }
    }
    

    public function tambah_pengguna(){
        $this->form_validation->set_rules('nama','Nama', 'required');
        $this->form_validation->set_rules('nama','Nama', 'required');
        $this->form_validation->set_rules('email','Email', 'required');
        $this->form_validation->set_rules('password','Password', 'required');
        $this->form_validation->set_rules('level','Level', 'required');
        if ($this->form_validation->run() == false){
        $data['profil'] = $this->ModelSekolah->get_profil()->result_array();
        $data['nama'] = $this->session->userdata()['nama'];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('auth/view_add_pengguna');
        $this->load->view('templates/footer');
        }else{
        $post = $this->input->post(null, TRUE);
        $this->ModelUser->add_pengguna($post);
        redirect('pengguna_sistem');
        }
}
    public function delete_pengguna(){
        

    $where = ['id_user' => $this->uri->segment(3)];
    $this->ModelUser->delete_user($where);
    redirect('pengguna_sistem');
    }
}
