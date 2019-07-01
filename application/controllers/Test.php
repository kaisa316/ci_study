<?php



class Test extends CI_Controller {

	public function info() {
		phpinfo();
	}

	public function multi_curl() {
		$start_ts = microtime(true);
		// Instantiate the MultiCurl class.
		$mc = JMathai\PhpMultiCurl\MultiCurl::getInstance();

		// Make a call to a URL.
		//$call1 = $mc->addUrl('http://develop.searchapi.ceshi.xin.com/real_cheshi/index?cityid=201&u_sign=093bcf6d18848d06b66ae2c2572f4db1&abtest=a&xdid=120B5DF48FB9283FBB34D3F79BFA9F60&zg_status=2&displacement=1&car_age=-1&car_type=-1&location=39.9040300%2C116.4075260');
		// Make another call to a URL.
		//$call2 = $mc->addUrl('http://develop.searchapi.ceshi.xin.com/search_mini/carinfo?searchstr=p0.01-a19&cityid=201&user_cityid=201&status=1&rows=1&fueltype=&source=app&nb=093bcf6d18848d06b66ae2c2572f4db1&abtest=a&xdid=120B5DF48FB9283FBB34D3F79BFA9F60&payment_rate=1&carid=&facet_field=0&zg_status=2&imm_stand_and=h1-&loc_zg_all=true');

		//$call3 = $mc->addUrl('http://searchapi.xin.com/search_mini/carinfo?searchstr=p0.01-a19i1&cityid=201&user_cityid=201&status=1&rows=20&fueltype=&source=app&nb=54bac86705334028beccfff55caf4e68&abtest=b&carid=0&monthly_payment=0-5000000&facet_field=3&zg_status=2&imm_stand_and=h1-&loc_zg_all=true');
		$call4 = $mc->addUrl('http://searchapi.xin.com/search_mini/carinfo?searchstr=p0.01-a19&cityid=201&user_cityid=201&status=1&rows=2&fueltype=&source=app&nb=54bac86705334028beccfff55caf4e68&abtest=b&carid=&monthly_payment=0-5000000&facet_field=0&zg_status=2&imm_stand_and=h1-&loc_zg_all=true&type_sale=50');
		$call5 = $mc->addUrl('http://searchapi.xin.com/real_cheshi/index?cityid=3001&u_sign=093bcf6d18848d06b66ae2c2572f4db1&zg_status=2&displacement=4&car_age=-1&car_type=1&location=30.2740840%2C120.1550700');
		$call6 = $mc->addUrl('http://searchapi.xin.com/search_mini/carinfo?searchstr=p0.01-a19&cityid=3001&user_cityid=3001&status=1&rows=1&fueltype=&source=app&nb=093bcf6d18848d06b66ae2c2572f4db1&abtest=a&payment_rate=1&carid=&facet_field=0&zg_status=2&imm_stand_and=u1h4-&loc_zg_all=true');

		echo "Call 6: {$call6->response}\n";
		echo "Call 5: {$call5->response}\n";
		//echo "Call 4: {$call4->response}\n";
		//echo "Call 3: {$call3->response}\n";
		// Access the response for $call2.
		// This blocks until $call2 is complete without waiting for $call1
		//echo "Call 2: {$call2->response}\n";
		// Access the response for $call1.
		//echo "Call 1: code={$call1->code},{$call1->response}\n";

		$end_ts = microtime(true);
		$exe_time = $end_ts - $start_ts;

		// Output a call sequence diagram to see how the parallel calls performed.
		//echo $mc->getSequence()->renderAscii()."\n";
		echo $exe_time."\n";
	}

	public function test_autoload() {
		$a = new RollingCurlX();
		$a->test_aa();
		echo '<br />';
	}

	public function sentry() {
	}


	

}



?>
