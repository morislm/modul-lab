<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){

		//yang diload pertama kali
		parent::__construct();
		check_not_login();
        $this->load->model('user_m');
	}

	public function index()
	{
		// $this->load->view('dashboard');		
        $data ['row'] = $this->user_m->get();
		$this->template->load('template','user/user_data', $data);
	}

    public function add(){
		
		$this->load->library('form_validation'); //load dulu library form validation
		
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
}
