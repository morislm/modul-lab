<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_m extends CI_Model {

    public function get($id = null){  //kalau ada parameter, tampil satu data. kalau tidak, tampil semua data
        
        $this->db->from('data_mahasiswa');
        if ($id != null){
            $this->db->where('id_mahasiswa', $id);
        }
        $this->db->where('status', '1');
        $query = $this->db->get();
        return $query;

    }

}