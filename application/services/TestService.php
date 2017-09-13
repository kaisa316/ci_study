<?php 
require_once APPPATH.'/core/MY_Service.php';

class TestService extends MY_Service {

	public function test() {
		$this->load->model('test_model');
		$this->test_model->get();
	}

}




