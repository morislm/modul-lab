<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	// function __construct(){

	// 	//yang diload pertama kali
	// 	parent::__construct();
	// 	check_not_login();
    //     $this->load->model('materi_m');
		
	// }

	public function index()
	{
		//$data ['row'] = $this->materi_m->get();
		check_not_login();
		$this->template->load('template','dashboard');
	}
}
