
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen_m extends CI_Model {
    
    public function get($id = null){  //kalau ada parameter, tampil satu data. kalau tidak, tampil semua data
        
        $this->db->from('data_dosen');
        if ($id != null){
            $this->db->where('id_dosen', $id);
        }
        $this->db->where('status', '1');
        $query = $this->db->get();
        return $query;

    }

    public function add($post,$kodetampil){
        $params ['id_dosen'] = $kodetampil;
        $params ['nama'] = $post['fullname'];
        $params ['nip'] = $post['nip'];
        $params ['nidn'] = $post['nidn'];
        $params ['jk'] = $post['jk'];
        $params ['tempat_lahir'] = $post['tempat_lahir'];
        $params ['tgl_lahir'] = $post['tgl_lahir'];
        $params ['alamat'] = $post['alamat'];
        $params ['id_jurusan'] = $post['jurusan'];
        $params ['no_hp'] = $post['no_hp'];
        $params ['email'] = $post['email'];
        //$params ['status'] = $post['status'];
        $this->db->insert('data_dosen',$params);

    }

    public function adduser($post,$kodetampil){
        $params ['user_id'] = $kodetampil;
        $params ['username'] = $post['nip'];
        $params ['password'] = sha1($post['nip']);
        $params ['name'] = $post['fullname'];
        $params ['level'] = '3';
        $this->db->insert('data_user',$params);

    }

    public function checkkode(){
        $this->db->select('RIGHT(data_dosen.id_dosen,5) as id_dosen', FALSE);
        $this->db->order_by('id_dosen','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('data_dosen');
            if($query->num_rows() <> 0){      
                $data = $query->row();
                $kode = intval($data->id_dosen) + 1; 
            }
            else{      
                $kode = 1;  
            }
        $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);    
        $kodetampil = "DSN".$batas;
        return $kodetampil;
    }

    public function edit($post){
        
        $params ['nama'] = $post['fullname'];
        $params ['nip'] = $post['nip'];
        $params ['nidn'] = $post['nidn'];
        $params ['jk'] = $post['jk'];
        $params ['tempat_lahir'] = $post['tempat_lahir'];
        $params ['tgl_lahir'] = $post['tgl_lahir'];
        $params ['alamat'] = $post['alamat'];
        $params ['id_jurusan'] = $post['jurusan'];
        $params ['no_hp'] = $post['no_hp'];
        $params ['email'] = $post['email'];        
        $this->db->where('id_dosen', $post['id_dosen']);
        $this->db->update('data_dosen',$params);

    }
    
    public function del($id){
        $params ['status'] = '0';
        $this->db->where('id_dosen', $id);
        $this->db->update('data_dosen',$params);
    }

} 