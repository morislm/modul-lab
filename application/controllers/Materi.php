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
		//$check = $this->materi_m->check($id);
		$menus = $this->materi_m->get_sub_menu($id);
		//$data ['row'] = $this->materi_m->get($id);
		//$data = array ('submenu' => $submenu );
		$data2 = $this->materi_m->get($id);
		$data = array('menus' => $menus,
						'data2' => $data2);
		
		$this->template->load('template','materi/materi_belajar_admin', $data);

	}

}