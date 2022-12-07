<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelUser extends CI_Model
{
    public function get_User($where=''){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id_user =',  $where);
        return $this->db->get();
    }
    public function editpengguna($id_user, $data) {
        $this->db->update('user', $data , $id_user); 
    }
    public function get_pengguna(){
        $this->db->select('*');
        $this->db->from('user');
        return $this->db->get();
    }
    public function delete_user($where = null){
        $this->db->delete('user', $where);
    }
    public function add_pengguna($post){
        $params['nama'] = $post['nama'];
        $params['email'] = $post['email'];
        $params['password'] = password_hash($post['password'], PASSWORD_DEFAULT);
        $params['level'] = $post['level'];
        $this->db->insert('user', $params);
    }
    public function get_kelas() {
        $this->db->select('*');
        $this->db->from('kelas');
        return $this->db->get();
    }
}