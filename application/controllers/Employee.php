<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {


	public function add() {
		$this->load->model('Employees');
		$data = $this->Employees->add($_POST);
		echo json_encode($data);
	}

	public function getById($id) {
		$this->load->model('Employees');
		$data = $this->Employees->getById($id);
		echo json_encode($data);
	}

	public function fetch() {
		$this->load->model('Employees');
		$data = $this->Employees->fetch();
		echo json_encode($data);
	}

	public function update() {
		$this->load->model('Employees');
		$data = $this->Employees->update($_POST);
		echo json_encode($data);
	}
}
