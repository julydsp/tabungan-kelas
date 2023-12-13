<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelSetor extends CI_Model 
{
     public function get_total_setoran_by_nis($nis){
        $this->db->select_sum('setor', 'total_setoran');
        $this->db->from('tabungan');
        $this->db->where('nis', $nis);
        $result = $this->db->get();

        return $result->row()->total_setoran;
    }
    
    
    public function get_setor(){
        $this->db->select('*');
        $this->db->from('tabungan');
        return $this->db->get();
    }
    public function delete_setoran($where = null){
        $this->db->delete('tabungan', $where);
    }
    public function edit_setor($where=''){
        $this->db->select('*');
        $this->db->from('tabungan');
        $this->db->join('siswa', 'tabungan.nis=siswa.nis');
        $this->db->where('id_tabungan =',  $where);
        return $this->db->get();
    }
    public function tambah_setor($post){
        $raw_setor = $post['setor'];

        // Membersihkan nilai dari karakter selain angka
        $clean_setor = preg_replace("/[^0-9]/", "", $raw_setor);

        // Mengonversi nilai setor menjadi integer
        $integer_setor = (int)$clean_setor;

        
        $params= ['nis' => $post['nis'],
        'setor'=> $integer_setor];
        $this->db->insert('tabungan', $params);
    }
    public function ubah_setor( $nis , $data) {
        
        $this->db->update('tabungan', $data , $nis); 
    }
    public function get_siswa(){
        $this->db->select('siswa.nis , siswa.nama_siswa');
        $this->db->from('siswa');
        return $this->db->get();
    }
    public function namasiswa(){
        $this->db->select('siswa.nama_siswa');
        $this->db->from('siswa');
        return $this->db->get();
    }
    public function jointabungan(){
        $this->db->select('*');
        $this->db->from('tabungan');
        $this->db->join('siswa', 'tabungan.nis=siswa.nis');
        return $this->db->get();
    }

    public function join($july){
        $this->db->select('*');
        $this->db->from('tabungan');
        $this->db->join('siswa', 'tabungan.nis=siswa.nis');
        $this->db->where('tabungan.nis =',  $july);
        return $this->db->get();
    }
    function get_total(){
        $sql = "SELECT sum(setor) as setor FROM tabungan";
        $result = $this->db->query($sql);
        return $result->row()->setor;
    }
   
}