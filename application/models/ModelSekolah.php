<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelSekolah extends CI_Model
{
public function simpanData($data = null)
{
$this->db->insert('user', $data);
}
public function cekData($where = null)
{
return $this->db->get_where('user', $where);
}
public function getUserWhere($where = null)
{
return $this->db->get_where('user', $where);
}
public function cekUserAccess($where = null)
{
$this->db->select('*');
$this->db->from('access_menu');
$this->db->where($where);
return $this->db->get();
}
public function getUserLimit()
{
$this->db->select('*');
$this->db->from('user');
$this->db->limit(10, 0);
return $this->db->get();
}

    public function get_profil(){
        $this->db->select('*');
        $this->db->from('profil_sekolah');
        return $this->db->get();
}
    public function get_pengguna(){
        $this->db->select('*');
        $this->db->from('user_role');
        return $this->db->get();
    }
    public function get_kelas() {
        $this->db->select('*');
        $this->db->from('kelas');
        return $this->db->get();
    }
    public function edit($id, $data) {
        $this->db->update('profil_sekolah', $data , $id);
    }
    public function edit_kelas($id, $data){
        $this->db->update('kelas', $data , $id);

    }

}