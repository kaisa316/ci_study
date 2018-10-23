<?php 
namespace Application\services;

use Application\core\MY_Service;

class TestService extends MY_Service {

	public function test() {
		$this->load->model('test_model');
		//$result = $this->test_model->get();
		$result = $this->test_model->get_hello();
		print_r($result);
	}

}




