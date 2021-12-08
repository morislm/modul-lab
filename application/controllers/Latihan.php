<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan extends CI_Controller {

    function __construct(){

		//yang diload pertama kali
		parent::__construct();
		check_not_login();
        $this->load->model('latihan_m');
		
	}

	public function index()
	{
		$data ['row'] = $this->latihan_m->get();
		$this->template->load('template','latihan/latihan', $data);
	}

	public function view($id)
	{
		//$check = $this->materi_m->check($id);
		$menus = $this->latihan_m->get_sub_menu($id);
		//$data ['row'] = $this->materi_m->get($id);
		//$data = array ('submenu' => $submenu );
		$data2 = $this->latihan_m->get($id);
		$data = array('menus' => $menus,
						'data2' => $data2);
		
		$this->template->load('template','latihan/latihan_list', $data);

	}

	public function soal()
	{
		//$data ['row'] = $this->latihan_m->get();
		$this->template->load('template','latihan/soal');
	}

	public function hasil()
	{
		//$data ['row'] = $this->latihan_m->get();
		$this->template->load('template','latihan/hasil');
	}



	
}