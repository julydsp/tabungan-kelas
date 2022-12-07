<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelSiswa extends CI_Model
{
    public function edit_siswa($where=''){
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->where('nis =',  $where);
        return $this->db->get();
    }
    public function get_siswa(){
        $this->db->select('*');
        $this->db->from('siswa');
        return $this->db->get();
    }
    public function ubah_siswa($nis, $data) {
        $this->db->update('siswa', $data , $nis); 
    }
    public function delete_siswa($where = null){
        $this->db->delete('siswa', $where);
    }
    public function tambah_siswa($post){
        $params['nis'] = $post['nis'];
        $params['nama_siswa'] = $post['nama_siswa'];
        $params['jekel'] = $post['jekel'];
        $params['id_kelas'] = $post['kelas'];
        $params['tahun_masuk'] = $post['tahun_masuk'];
        $this->db->insert('siswa', $params);
    }
    public function joinkelas(){
        $this->db->select('');
        $this->db->from('siswa');
        $this->db->join('kelas', 'siswa.id_kelas = kelas.id_kelas');
        return $this->db->get();
    }
}