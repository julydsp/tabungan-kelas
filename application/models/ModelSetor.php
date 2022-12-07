<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelSetor extends CI_Model 
{
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
        $this->db->where('nis =',  $where);
        return $this->db->get();
    }
    public function tambah_setor($post){

        $params= ['nis' => $post['nis'],
        'setor'=> $post['setor']];
        $this->db->insert('tabungan', $params);
    }
    public function ubah_setor($nis, $data) {
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
}