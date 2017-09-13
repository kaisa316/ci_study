<?php

class Test extends CI_Controller {

	public function index() {
		//$this->load->service('TestService');
		//$this->testservice->test();
		echo 'xxxxx';
	}


	public function get() {
		$this->load->model('test_model');//test_model ,Test_model都是可以的	
		$this->test_model->get();
	}

	public function get_sql() {
		$this->load->model('test_model');	
		$this->test_model->get_sql();
	}

	public function update() {
		$this->load->model('test_model');	
		$this->test_model->update();	
	}

	public function insert() {
		$this->load->model('test_model');	
		$this->test_model->insert();
	}

	public function delete() {
		$this->load->model('test_model');
		$this->test_model->delete();
	}

	public function transaction() {
		$this->load->model('test_model');
		$this->test_model->transaction();
	}

	public function test_common() {
		$this->load->model('commons/TestCommon');	
		$this->TestCommon->test();
	}

	public function out_common() {
		$test_common = new TestCommon();
		$test_common->test();	
	}

	public function get_xx() {
		$this->load->model('test_model');
		$this->test_model->get_xx();
	}

}



?>
