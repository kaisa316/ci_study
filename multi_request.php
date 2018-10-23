<?php

require_once 'application/services/Rollingcurlx.class.php'; 

$url = 'http://searchapi.xin.com/search_mini/carinfo?searchstr=p0.01-a19i1&cityid=201&user_cityid=201&status=1&rows=20&fueltype=&source=app&nb=54bac86705334028beccfff55caf4e68&abtest=b&carid=0&monthly_payment=0-5000000&facet_field=3&zg_status=2&imm_stand_and=h1-&loc_zg_all=true';
$post_data = null; //set to NULL if not using POST
$headers = null;
$user_data = ['foo', 'kasia316'];
$options = [CURLOPT_FOLLOWLOCATION => false];
$result = array();
function callback_functn($response, $url, $request_info, $user_data, $time) {
    //$time; //how long the request took in milliseconds (float)
    //$request_info; //array returned by curl_getinfo($ch), plus a couple extras
	global $result;
	$result[] = array('response'=>$response,'use time'=>$time);
}

$RCX = new RollingCurlX(20);
$RCX->addRequest($url, $post_data, 'callback_functn', $user_data, $options, $headers);
$RCX->addRequest($url, $post_data, 'callback_functn', $user_data, $options, $headers);
$RCX->addRequest($url, $post_data, 'callback_functn', $user_data, $options, $headers);
$RCX->addRequest($url, $post_data, 'callback_functn', $user_data, $options, $headers);
$RCX->addRequest($url, $post_data, 'callback_functn', $user_data, $options, $headers);
$RCX->addRequest($url, $post_data, 'callback_functn', $user_data, $options, $headers);
//$RCX->addRequest($url, $post_data, 'callback_functn', $user_data, $options, $headers);
//$RCX->addRequest($url, $post_data, 'callback_functn', $user_data, $options, $headers);
//$RCX->addRequest($url, $post_data, 'callback_functn', $user_data, $options, $headers);
//$RCX->addRequest($url, $post_data, 'callback_functn', $user_data, $options, $headers);
//$RCX->addRequest($url, $post_data, 'callback_functn', $user_data, $options, $headers);
//$RCX->addRequest($url, $post_data, 'callback_functn', $user_data, $options, $headers);
//$RCX->addRequest($url, $post_data, 'callback_functn', $user_data, $options, $headers);
//$RCX->addRequest($url, $post_data, 'callback_functn', $user_data, $options, $headers);
//$RCX->addRequest($url, $post_data, 'callback_functn', $user_data, $options, $headers);
//$RCX->addRequest($url, $post_data, 'callback_functn', $user_data, $options, $headers);
//$RCX->addRequest($url, $post_data, 'callback_functn', $user_data, $options, $headers);
//$RCX->addRequest($url, $post_data, 'callback_functn', $user_data, $options, $headers);
//$RCX->addRequest($url, $post_data, 'callback_functn', $user_data, $options, $headers);
//$RCX->addRequest($url, $post_data, 'callback_functn', $user_data, $options, $headers);
$RCX->execute();

print_r($result);

?>
