<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {


	public function add() {
		$this->load->model('Logs');
		$data = $this->Logs->add($_POST);
		echo json_encode($data);
	}
	

	public function getById($id) {
		$this->load->model('Logs');
		$data = $this->Logs->getById($id);
		echo json_encode($data);
	}

	public function fetch() {
		$this->load->model('Logs');
		$data = $this->Logs->fetch();
		echo json_encode($data);
	}

	public function update() {
		$this->load->model('Logs');
		$data = $this->Logs->update($_POST);
		echo json_encode($data);
	}
}
