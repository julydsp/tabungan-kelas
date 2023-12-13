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
        $data['nama'] = $this->session->userdata()['nama'];
        $data['total'] = $this->ModelSetor->get_total();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('auth/setoran');
        $this->load->view('templates/footer');  
    }
    public function edit_setoran(){
        $this->form_validation->set_rules('setor','Setor', 'required');
        
        if ($this->form_validation->run() == false) {
        $data['profil'] = $this->ModelSekolah->get_profil()->result_array();
        $data['tampil'] = $this->ModelSetor->get_siswa()->result_array();
        $data['nama'] = $this->session->userdata()['nama'];
        $data['siswa'] = $this->ModelSetor->edit_setor($this->uri->segment(3))->row_array();
        $data['id_tabungan'] = $this->uri->segment(3);
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('auth/view_edit_setoran');
        $this->load->view('templates/footer');
    } else {
         $raw_setor = $this->input->post('setor', true);

        // Membersihkan nilai dari karakter selain angka
        $clean_setor = preg_replace("/[^0-9]/", "", $raw_setor);

        // Mengonversi nilai setor menjadi integer
        $integer_setor = (int)$clean_setor;
        $data = [
            'setor' => $integer_setor,
        ];
        $this->ModelSetor->ubah_setor([ 'id_tabungan' => $this->input->post('id_tabungan', true)], $data);
        redirect('setoran');
    }
}
    public function add_setoran(){
        $this->form_validation->set_rules('nis','Nis', 'trim|required');
    
        if ($this->form_validation->run() == false){
            $data['tampil'] = $this->ModelSetor->get_siswa()->result_array();
            $data['profil'] = $this->ModelSekolah->get_profil()->result_array();
            $data['nama'] = $this->session->userdata()['nama'];


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
    
        $where = ['id_tabungan' => $this->uri->segment(3)];
        $this->ModelSetor->delete_setoran($where);
        redirect('setoran');
    }
    public function get_saldo_by_nis($nis) {
        $saldo = $this->ModelSetor->get_saldo_by_nis($nis);
        echo $saldo;
}

    public function getDetail(){
    $nis = $this->input->post('nis');
    $data = $this->ModelSetor->get_total_setoran_by_nis($nis);

    if(isset($data)){
        $params = [
            'success' => true,
            'nis' => $data,
        ];
    }else{
        $params = [
            'success' => false,
        ];
    }
    echo json_encode($params);
    
    }
}