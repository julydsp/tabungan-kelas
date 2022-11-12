<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Auth extends CI_Controller 
{

    public function index()
    {
        $this->load->view('Auth/login'); 
    }
}