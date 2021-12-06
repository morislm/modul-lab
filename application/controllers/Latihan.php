<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan extends CI_Controller {

    function __construct(){

		//yang diload pertama kali
		parent::__construct();
		check_not_login();
        //$this->load->model('materi_m');
		
	}

	public function index()
	{
		//$data ['row'] = $this->materi_m->get();
		$this->template->load('template','latihan/latihan');
	}

	
}