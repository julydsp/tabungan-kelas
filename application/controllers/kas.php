<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class kas extends CI_Controller 
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('ModelUser');
        $this->load->library('form_validation');
    }
    public function index() {
        $data['profil'] = $this->ModelSekolah->get_profil()->result_array();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('auth/kas');
        $this->load->view('templates/footer');
        
        
        
    }
}