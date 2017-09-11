<?php 
//Test Controller 对应的公共提取类
// 原controller 作为router用途，而这个文件作为真正的controller

class TestCommon {
	private $_ci;

	public function __construct() {
		$this->_ci = &get_instance();	
	}
	
	public function test() {
		$this->_ci->load->model('test_model');
		$this->_ci->test_model->get();
		
	}

}




