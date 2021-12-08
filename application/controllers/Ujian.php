<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ujian extends CI_Controller {

    function __construct(){

		//yang diload pertama kali
		parent::__construct();
		check_not_login();
        // $this->load->model('latihan_m');
		
	}

	public function index()
	{
		// $data ['row'] = $this->latihan_m->get();
		$this->template->load('template','ujian/ujian');
	}

	


	
}