<?php

class MY_Loader extends CI_Loader {

	protected $_ci_services	= array();
	protected $_ci_service_path	= array();

	public function __construct() {
		parent::__construct();
		$this->_ci_service_paths = array(APPPATH);
	}

	/**
	 * Model Loader
	 *
	 * This function lets users load and instantiate models.
	 *
	 * @param	string	the name of the class
	 * @param	string	name for the model
	 * @param	bool	database connection
	 * @return	void
	 */
	public function service($service)
	{
		if (is_array($service))
		{
			foreach ($service as $babe)
			{
				$this->service($babe);
			}
			return;
		}

		if ($service == '' || isset($this->_ci_services[$service]))
		{
			return;
		}

		$path = '';

		// Is the service in a sub-folder? If so, parse out the filename and path.
		if (($last_slash = strrpos($service, '/')) !== FALSE)
		{
			// The path is in front of the last slash
			$path = substr($service, 0, $last_slash + 1);

			// And the model name behind it
			$service = substr($service, $last_slash + 1);
		}

		if ( ! file_exists(APPPATH.'services/'.$path.$service.'.php'))
		{
			//continue;
			// couldn't find the service
			show_error('Unable to locate the service you have specified: '.$service);
		}  
		require_once(APPPATH.'services/'.$path.$service.'.php');

		$CI = & get_instance();
		$lower_service = strtolower($service);
		$CI->$lower_service = new $service();

		$this->_ci_services[] = $service;
	}
}



