<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelKelas extends CI_Model
{
    public function get_kelas($where=''){
        $this->db->select('*');
        $this->db->from('kelas');
        $this->db->where('id_kelas =',  $where);
        return $this->db->get();
    }
    public function editkelas($id_kelas, $data) {
        $this->db->update('kelas', $data , $id_kelas);
    }
    public function delete_kelas($where = null){
        $this->db->delete('kelas', $where);
    }
    public function tambah_kelas($post){
        $params['kelas'] = $post['kelas'];
        $this->db->insert('kelas', $params);
    }
    public function tampil_kelas() {
        $this->db->select('*');
        $this->db->from('kelas');
        return $this->db->get();
    }
    public function joinkelas(){
        $this->db->select('kelas.kelas , siswa.nis , siswa.id_kelas , siswa.nama_siswa , siswa.jekel , siswa.status , siswa.tahun_masuk');
        $this->db->from('kelas');
        $this->db->join('siswa', 'siswa.id_kelas = kelas.id_kelas');
        return $this->db->get();
    }
}