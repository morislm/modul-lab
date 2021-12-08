<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Image extends CI_Model{
	function __construct() {
		$this->tableName = 'data_soal_latihan';
	}
	
	/*
     * Fetch files data from the database
     * @param id returns a single record if specified, otherwise all records
     */
	public function getRows($id = ''){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->order_by('img_order', 'asc');
		$query = $this->db->get();
		return ($query->num_rows() > 0)?$query->result_array():false;
	}
	
	/*
     * Update file data into the database
     * @param array the data for inserting into the table
     * @param int the row id
     */
	public function update($data = array(), $id){
		if(!array_key_exists('modified', $data)){
			$data['modified'] = date("Y-m-d H:i:s");
		}
		$update = $this->db->update($this->tableName, $data, array('id' => $id));
		return $update?true:false;
	}
}