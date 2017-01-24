<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function add($obj) {
 		$this->db->insert('customer', $obj);
 		if ($this->db->affected_rows() > 0)
			return true;
		return false;
	}

	public function fetch() {
		$this->db->select('*')->from('customer');
    $query = $this->db->get();
		return $query->result();
	}

	public function getById($id) {
		$this->db->select('*')->from('customer')->from(Array("id" => $id))
		$list = $this->db->get();
		return $list;
	} 

	public function update($obj, $id) {
		$this->db->where($id);
		$this->db->update('customer', $obj);
		if($this->db->affected_rows() > 0) return true;
		else return false;
	}
}

?>