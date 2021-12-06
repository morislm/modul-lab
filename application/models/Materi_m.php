<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi_m extends CI_Model {
    public function get($id = null){  //kalau ada parameter, tampil satu data. kalau tidak, tampil semua data
                
        if ($id != null){
            $this->db->select('*');           
            $this->db->from('data_menu_belajar a, data_sub_menu_belajar b, data_materi c');
            $this->db->where('a.id_menu_belajar = b.id_menu_belajar');
            $this->db->where('b.id_sub_menu_belajar=c.id_sub_menu_belajar');
            //$this->db->from('data_menu_belajar');
            $this->db->where('a.id_menu_belajar', $id);
        } else {            
            $this->db->from('data_menu_belajar');
        }
        //$this->db->where('status', '1');
        $query = $this->db->get();
        return $query;
    }

    // public function get_materi($id){
    //     $this->db->select('*');           
    //     $this->db->from('data_menu_belajar a, data_sub_menu_belajar b, data_materi c');
    //     $this->db->where('a.id_menu_belajar = b.id_menu_belajar');
    //     $this->db->where('b.id_sub_menu_belajar=c.id_sub_menu_belajar');
    //     $this->db->where('a.id_menu_belajar', $id);
    //     $query = $this->db->get('id_materi');
        
        
             

        
    // }

    function get_sub_menu($id){
        $this->db->select("*");
        $this->db->from("data_menu_belajar");
        $this->db->where('id_menu_belajar', $id);
        $q = $this->db->get();

        $final = array();
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
    
                $this->db->select("*");
                $this->db->from("data_sub_menu_belajar");
                $this->db->where("id_menu_belajar", $row->id_menu_belajar);
                $q = $this->db->get();
                if ($q->num_rows() > 0) {
                    $row->submenu = $q->result();
                }
                array_push($final, $row);
            }
            
        }
        return $final;


    }

    

}