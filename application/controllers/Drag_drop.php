<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Drag_Drop extends CI_Controller {
	function  __construct() {
		parent::__construct();
		
		// Load file model
		$this->load->model('image');
	}
	
	function index(){
		$data = array();
		
		// Get images data from the database
		$data['images'] = $this->image->getRows();
		
		// Pass the images data to view
		$this->load->view('drag_drop/index', $data);
		//$this->template->load('template','drag_drop/index', $data);
	}
	
	function orderUpdate(){
		// Get id of the images
		$ids = $this->input->post('ids');
		
		if(!empty($ids)){
			// Generate ids array
			$idArray = explode(",", $ids);
			
			$count = 1;
			foreach ($idArray as $id){
				// Update image order by id
				$data = array('img_order' => $count);
				$update = $this->image->update($data, $id);
				$count ++;	
			}
			
		}
		
		return true;
	}
}