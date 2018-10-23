<?php



class Test extends CI_Controller {

	public function multi_curl() {
		$start_ts = microtime(true);
		// Instantiate the MultiCurl class.
		$mc = JMathai\PhpMultiCurl\MultiCurl::getInstance();

		// Make a call to a URL.
		$call1 = $mc->addUrl('http://searchapi.xin.com/search_mini/carinfo?searchstr=p0.01-a19i1&cityid=201&user_cityid=201&status=1&rows=20&fueltype=&source=app&nb=54bac86705334028beccfff55caf4e68&abtest=b&carid=0&monthly_payment=0-5000000&facet_field=3&zg_status=2&imm_stand_and=h1-&loc_zg_all=true');
		// Make another call to a URL.
		$call2 = $mc->addUrl('http://searchapi.xin.com/search_mini/carinfo?searchstr=p0.01-a19i1&cityid=201&user_cityid=201&status=1&rows=20&fueltype=&source=app&nb=54bac86705334028beccfff55caf4e68&abtest=b&carid=0&monthly_payment=0-5000000&facet_field=3&zg_status=2&imm_stand_and=h1-&loc_zg_all=true');

		$call3 = $mc->addUrl('http://searchapi.xin.com/search_mini/carinfo?searchstr=p0.01-a19i1&cityid=201&user_cityid=201&status=1&rows=20&fueltype=&source=app&nb=54bac86705334028beccfff55caf4e68&abtest=b&carid=0&monthly_payment=0-5000000&facet_field=3&zg_status=2&imm_stand_and=h1-&loc_zg_all=true');
		$call4 = $mc->addUrl('http://searchapi.xin.com/search_mini/carinfo?searchstr=p0.01-a19&cityid=201&user_cityid=201&status=1&rows=2&fueltype=&source=app&nb=54bac86705334028beccfff55caf4e68&abtest=b&carid=&monthly_payment=0-5000000&facet_field=0&zg_status=2&imm_stand_and=h1-&loc_zg_all=true&type_sale=50');
		$call5 = $mc->addUrl('http://searchapi.xin.com/search_mini/carinfo?searchstr=p0.01-a19&cityid=201&user_cityid=201&status=1&rows=2&fueltype=&source=app&nb=54bac86705334028beccfff55caf4e68&abtest=b&carid=&monthly_payment=0-5000000&facet_field=0&zg_status=2&imm_stand_and=h1-&loc_zg_all=true&type_sale=50');
		$call6 = $mc->addUrl('http://searchapi.xin.com/search_mini/carinfo?searchstr=p0.01-a19&cityid=201&user_cityid=201&status=1&rows=2&fueltype=&source=app&nb=54bac86705334028beccfff55caf4e68&abtest=b&carid=&monthly_payment=0-5000000&facet_field=0&zg_status=2&imm_stand_and=h1-&loc_zg_all=true&type_sale=50');

		echo "Call 6: {$call6->response}\n";
		echo "Call 5: {$call5->response}\n";
		echo "Call 4: {$call4->response}\n";
		echo "Call 3: {$call3->response}\n";
		// Access the response for $call2.
		// This blocks until $call2 is complete without waiting for $call1
		echo "Call 2: {$call2->response}\n";
		// Access the response for $call1.
		echo "Call 1: code={$call1->code},{$call1->response}\n";

		$end_ts = microtime(true);
		$exe_time = $end_ts - $start_ts;

		// Output a call sequence diagram to see how the parallel calls performed.
	//	echo $mc->getSequence()->renderAscii();
		echo $exe_time;
	}

	public function test_autoload() {
		$a = new RollingCurlX();
		$a->test_aa();
		echo '<br />';
	}


	

}



?>
