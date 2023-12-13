<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelTab extends CI_Model 
{
    public function get_tab_siswa($id){
        $sql = "SELECT sum(setor) as setor_s FROM tabungan WHERE nis = $id";
        $result = $this->db->query($sql);
        return $result->row()->setor_s; 
    }
   
}