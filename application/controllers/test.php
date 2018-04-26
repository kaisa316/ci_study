<?php

class Test extends CI_Controller {

	public function test_ab() {
		$result = version_compare('9.3.de82393b','9.3','<');		
		$result = version_compare('9.3.1','9.3','<');		
		var_dump($result);
		echo '123';
	
	}


	

}



?>
