<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

    public function login($post){

        $this->db->select('*');
        $this->db->from('data_user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', sha1($post['password']));
        $query = $this->db->get();
        return $query;
    }

    public function get($id = null){  //kalau ada parameter, tampil satu data. kalau tidak, tampil semua data
        
        $this->db->from('data_user');
        if ($id != null){
            $this->db->where('user_id', $id);

        }
        $query = $this->db->get();
        return $query;

    }

    public function add($post){
        $params ['username'] = $post['username'];
        $params ['password'] = sha1($post['Password1']);
        $params ['name'] = $post['fullname'];
        $params ['level'] = $post['level'];
        $this->db->insert('data_user',$params);

    }

    public function del($id){
        $this->db->where('user_id', $id);
        $this->db->delete('data_user');  

    }

    public function edit($post){
        $params ['username'] = $post['username'];
        if(!empty($post['Password1'])){
            $params ['password'] = sha1($post['Password1']);
        }
        $params ['name'] = $post['fullname'];
        $params ['level'] = $post['level'];
        $this->db->where('user_id', $post['user_id']);
        $this->db->update('data_user',$params);

    }
}