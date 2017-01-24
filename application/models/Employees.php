<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function add($obj) {
 		$this->db->insert('employee', $obj);

 		if ($this->db->affected_rows() > 0)
			return true;
		
		return false;
	}
	
	public function getById($id) {
		$this->db->select('*')->from('employee')->from(Array("id" => $id))
		$list = $this->db->get();
		return $list;
	}

	public function fetch() {
		$this->db->select('*')->from('employee');
    $query = $this->db->get();
		return $query->result();
	} 

	public function update($obj, $id) {
		$this->db->where($id);
		$this->db->update('employee', $obj);
		if($this->db->affected_rows() > 0) return true;
		else return false;
	}
}

?>