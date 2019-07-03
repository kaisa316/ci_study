<?php

class MY_Controller extends CI_Controller {
	public function __construct() {
		parent::__construct();
		//Sentry\init(['dsn' => 'https://c548e5b8a4e24806b12b554f4a199ea7@sentry.io/1370870' ]);
		Sentry\init(['dsn' => 'http://1576aac9570646ea88025552a603175c@127.0.0.1:9000/2' ]);//发送到本地sentry 服务
	}		
}
