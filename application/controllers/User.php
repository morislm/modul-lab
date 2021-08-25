<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){

		//yang diload pertama kali
		parent::__construct();
		check_not_login();
        $this->load->model('user_m');
		$this->load->library('form_validation'); //load dulu library form validation, sebelum add or edit
	}

	public function index()
	{
		// $this->load->view('dashboard');		
        $data ['row'] = $this->user_m->get();
		$this->template->load('template','user/user_data', $data);
	}

    public function add(){
		
			
		//set rules 
		$this->form_validation->set_rules('fullname', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[data_user.username]',
						array('is_unique' => '%s Sudah digunakan')
		);
		$this->form_validation->set_rules('Password1', 'Password', 'required|min_length[8]');
		$this->form_validation->set_rules('PasswordConf', 'Konfirmasi Password', 'required|matches[Password1]',
						array('matches' => '%s Tidak sesuai dengan Password')	
		);
		$this->form_validation->set_rules('level', 'Level', 'required');

		$this->form_validation->set_message('required', '%s Masih Kosong, Silahkan diisi');
		$this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');

		

		if ($this->form_validation->run() == FALSE)
		{
			$this->template->load('template','user/user_form_add'); //kalau validasi gagal, load lagi formnya
				
		}
		else
		{
			$post = $this->input->post(null, TRUE);
			$this->user_m->add($post);
			if ($this->db->affected_rows() > 0 ){
				echo "<script>
					alert('Data Berhasil Disimpan')
				</script>";
			}
			echo "<script>
				window.location='".site_url('user')."'
			</script>";
		}
    }

	public function edit($id){	
				
		//set rules 
		$this->form_validation->set_rules('fullname', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|callback_username_check',
						array('is_unique' => '%s Sudah digunakan')
		);
		
		if($this->input->post('Password1')){
		$this->form_validation->set_rules('Password1', 'Password', 'min_length[8]');
		$this->form_validation->set_rules('PasswordConf', 'Konfirmasi Password', 'matches[Password1]',
						array('matches' => '%s Tidak sesuai dengan Password')	
		);
		}

		if($this->input->post('PasswordConf')){
			$this->form_validation->set_rules('PasswordConf', 'Konfirmasi Password', 'matches[Password1]',
						array('matches' => '%s Tidak sesuai dengan Password')	
			);
		}


		$this->form_validation->set_rules('level', 'Level', 'required');
		$this->form_validation->set_message('required', '%s Masih Kosong, Silahkan diisi');
		$this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');


		if ($this->form_validation->run() == FALSE)
		{
			$query = $this->user_m->get($id);
			if ($query->num_rows() > 0) //numrows : menghitung jumlah baris 
			{
				$data['row'] = $query->row();
				$this->template->load('template','user/user_form_edit', $data); //kalau validasi gagal, load lagi formnya

			}else{
				echo "<script>
					alert('Data Tidak Ditemukan');
					window.location='".site_url('user')."';
				</script>";

			}			
		}
		else
		{
			$post = $this->input->post(null, TRUE);
			$this->user_m->edit($post);
			if ($this->db->affected_rows() > 0 ){
				echo "<script>
					alert('Data Berhasil Diubah');
				</script>";
			}
			echo "<script>
				window.location='".site_url('user')."';
			</script>";
		}
    }

	public function username_check(){
		$post = $this->input->post(null, TRUE);
		$query = $this->db->query("SELECT * FROM data_user where username = '$post[username]' AND user_id != '$post[user_id]'");
		if ($query->num_rows() > 0 ){
			$this->form_validation->set_message('username_check', '{field} ini sudah dipakai, silahkan ganti');
			return FALSE;
		}else{
			return TRUE;
		}

	}

	public function del()
	{
		$id = $this->input->post('user_id');
		$this->user_m->del($id);

		if ($this->db->affected_rows() > 0 ){
			echo "<script>
				alert('Data Berhasil Dihapus')
			</script>";
		}
		echo "<script>
			window.location='".site_url('user')."'
		</script>";
	}
}
