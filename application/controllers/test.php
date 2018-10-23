<?php

use Application\services\TestService;


class Test extends CI_Controller {

	public function test_ab() {
		$service = new TestService();	
		$service->test();
	}

	public function test_autoload() {
		$a = new RollingCurlX();
		$a->test_aa();
		echo '<br />';
		$service = new TestService();	
		$service->test();
	}


	

}



?>
