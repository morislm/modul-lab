<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi_m extends CI_Model {
    public function get($id = null){  //kalau ada parameter, tampil satu data. kalau tidak, tampil semua data
                
        if ($id != null){
            $this->db->select('*');           
            $this->db->from('data_menu_belajar a, data_sub_menu_belajar b');
            $this->db->where('a.id_menu_belajar = b.id_menu_belajar');
            // $this->db->from('data_menu_belajar');
            $this->db->where('a.id_menu_belajar', $id);
        } else {            
            $this->db->from('data_menu_belajar');
        }
        //$this->db->where('status', '1');
        $query = $this->db->get();
        return $query;
    }

    public function get_materi($id){
        $this->db->select('*');           
        $this->db->from('data_sub_menu_belajar a, data_materi b');
        $this->db->where('a.id_sub_menu_belajar = b.id_sub_menu_belajar');
        // $this->db->from('data_menu_belajar');
        $this->db->where('a.id_sub_menu_belajar', $id);

    }

}