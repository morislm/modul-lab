<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller {

    function __construct(){

		//yang diload pertama kali
		parent::__construct();
		check_not_login();
        $this->load->model('materi_m');
		
	}

	public function index()
	{
		$data ['row'] = $this->materi_m->get();
		$this->template->load('template','materi/data_materi', $data);
	}

	public function view($id)
	{
		$data ['row'] = $this->materi_m->get($id);
		$data ['materi'] = $this->materi_m->get_materi($id);
		$this->template->load('template','materi/materi_belajar', $data);

	}

}