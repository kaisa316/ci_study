<?php

require_once 'application/services/Rollingcurlx.class.php'; 

$url = 'http://api.xin.com/car_search/search/?_apikey=10d859&abtest=&app_source=3&appver=9.0&c_p=0&cityid=201&imei=867977031013205&imsi=460012031612413&ip=10.70.67.147&list_type=1&loc_num=0&n_p=0&nb=cfe9d6d318f5c310be5e25a2baacef16&net=wifi&offset=0&os=android&p_p=0&ref=&search_cityid=201&st=0&sysver=25&ts=1514534018279&uid=&url=HomeFragment&uuid=9440da82-45bb-4923-976c-ab42f2e3b505&zg_num=0';
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
//$RCX->addRequest($url, $post_data, 'callback_functn', $user_data, $options, $headers);
$RCX->execute();

print_r($result);

?>
