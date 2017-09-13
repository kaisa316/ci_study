<?php
/**
 * service base class
 */

class MY_Service {

	public function __get($key)
	{
		$CI =& get_instance();
		return $CI->$key;
	}

}



