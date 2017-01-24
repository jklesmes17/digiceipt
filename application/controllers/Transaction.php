<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {


	public function add() {
		$this->load->model('Transactions');
		$data = $this->Transactions->add($_POST);
		echo json_encode($data);
	}
	

	public function getById($id) {
		$this->load->model('Transactions');
		$data = $this->Transactions->getById($id);
		echo json_encode($data);
	}

	public function fetch() {
		$this->load->model('Transactions');
		$data = $this->Transactions->fetch();
		echo json_encode($data);
	}

	public function update() {
		$this->load->model('Transactions');
		$data = $this->Transactions->update($_POST);
		echo json_encode($data);
	}
}
