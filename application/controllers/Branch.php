<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branch extends CI_Controller {


	public function add() {
		$this->load->model('Branches');
		$data = $this->Branches->add($_POST);
		echo json_encode($data);
	}
	

	public function getById($id) {
		$this->load->model('Branches');
		$data = $this->Branches->getById($id);
		echo json_encode($data);
	}

	public function fetch() {
		$this->load->model('Branches');
		$data = $this->Branches->fetch();
		echo json_encode($data);
	}

	public function update() {
		$this->load->model('Branches');
		$data = $this->Branches->update($_POST);
		echo json_encode($data);
	}
}
