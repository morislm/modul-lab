<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	function __construct(){

		//yang diload pertama kali
		parent::__construct();
		check_not_login();
        $this->load->model('dosen_m');
		$this->load->library('form_validation'); //load dulu library form validation, sebelum add or edit
	}

	public function index()
	{
		// $this->load->view('dashboard');
		$data ['row'] = $this->dosen_m->get();
		$this->template->load('template','dosen/data_dosen', $data);
	}

	public function add(){

		// $kode_barang = $this->dosen_m->add();
    	// echo $kode_barang;  
		// $this->template->load('template','dosen/dosen_form_add');

		// $post = $this->input->post(null, TRUE);
		// $this->dosen_m->add($post);
		
		
		// //set rules 
		$this->form_validation->set_rules('fullname', 'Nama', 'required');
		$this->form_validation->set_rules('nip', 'nip', 'required|is_unique[data_dosen.nip]',
		 				array('is_unique' => '%s Sudah digunakan')
		 );
		 $this->form_validation->set_rules('nidn', 'nidn', 'required|is_unique[data_dosen.nidn]',
		 				array('is_unique' => '%s Sudah digunakan')
		 );
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('status', 'status', 'required');
		$this->form_validation->set_message('required', '%s Masih Kosong, Silahkan diisi');
		$this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');
		if ($this->form_validation->run() == FALSE)		{
			$this->template->load('template','dosen/dosen_form_add'); //kalau validasi gagal, load lagi formnya				
		}
		else
		{
			$post = $this->input->post(null, TRUE);
			$kode_tampil = $this->dosen_m->checkkode();
			$this->dosen_m->add($post, $kode_tampil);
			$this->dosen_m->adduser($post,$kode_tampil);
			if ($this->db->affected_rows() > 0 ){
				echo "<script>
					alert('Data Berhasil Disimpan')
				</script>";
			}
			echo "<script>
				window.location='".site_url('dosen')."'
			</script>";
		}
    }

	public function edit($id){	
		$this->form_validation->set_rules('fullname', 'Nama', 'required');

		$this->form_validation->set_rules('nip', 'nip', 'required');
		 $this->form_validation->set_rules('nidn', 'nidn', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_message('required', '%s Masih Kosong, Silahkan diisi');
		$this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');
		if ($this->form_validation->run() == FALSE)		{
			$query = $this->dosen_m->get($id);
			if ($query->num_rows() > 0) //numrows : menghitung jumlah baris 
			{
				$data['row'] = $query->row();
				$this->template->load('template','dosen/dosen_form_edit', $data); //kalau validasi gagal, load lagi formnya

			}else{
				echo "<script>
					alert('Data Tidak Ditemukan');
					window.location='".site_url('dosen')."';
				</script>";

			}		 //kalau validasi gagal, load lagi formnya				
		}
		else
		{
			$post = $this->input->post(null, TRUE);
			$this->dosen_m->edit($post);
			if ($this->db->affected_rows() > 0 ){
				echo "<script>
					alert('Data Berhasil Diubah');
				</script>";
			}
			echo "<script>
				window.location='".site_url('dosen')."';
			</script>";
		}
	}

	public function del()
	{
		$id = $this->input->post('id_dosen');
		$this->dosen_m->del($id);

		if ($this->db->affected_rows() > 0 ){
			echo "<script>
				alert('Data Berhasil Dihapus')
			</script>";
		}
		echo "<script>
			window.location='".site_url('dosen')."'
		</script>";
	}
}