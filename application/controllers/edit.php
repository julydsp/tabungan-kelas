<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class edit extends CI_Controller 
{
    public function index() {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('auth/setoran');
        $this->load->view('templates/footer');
    }
    


}


