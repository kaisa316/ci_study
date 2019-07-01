<?php

class MY_Controller extends CI_Controller {
	public function __construct() {
		parent::__construct();
		Sentry\init(['dsn' => 'https://c548e5b8a4e24806b12b554f4a199ea7@sentry.io/1370870' ]);
	}		
}
