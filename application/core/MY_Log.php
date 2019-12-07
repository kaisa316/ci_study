<?php
class MY_Log extends CI_Log {

	/**
	 * @override
	 * Write Log File
	 *
	 * Generally this function will be called using the global log_message() function
	 *
	 * @param	string	$level 	The error level: 'error', 'debug' or 'info'
	 * @param	string	$msg 	The error message
	 * @return	bool
	 */
	public function write_log($level, $msg)
	{
		//custom by 
		if($level == 'error') {
			if(strpos($msg,"404 Page Not Found") !== false) {
				return false; //404error,不再纪录
			}
			$msg = $this->get_trace_custom($msg);	
		}
		//custom end
		return parent::write_log($level,$msg);
	}

	/**
	 * 获取错误信息
	 * @return string
	 */
	private function get_trace_custom($msg) {
		ob_start();
		debug_print_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
		$trace_msg = ob_get_contents();
		ob_end_clean();
		
		//记录apikey，便于追踪
		$apikey = '';
		if(!empty($_POST['_apikey'])) {
			$apikey = $_POST['_apikey'];
		} else {
			$apikey = $_GET['_apikey'] ?? '';
		} 
		$msg .= "\n本次请求_apikey:".$apikey.",运行环境:".ENVIRONMENT;
		$trace_msg = "{$msg}\n".$trace_msg;

		/*
		$trace_msg_arr = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);	
		$trace_msg = '';
		foreach($trace_msg_arr as $index=>$trace) {
			$class = isset($trace['class']) ? $trace['class'] : '';	
			$function = isset($trace['function']) ? $trace['function'] : '';	
			$file = isset($trace['file']) ? $trace['file'] : '';	
			$line = isset($trace['line']) ? $trace['line'] : '';	
			$type = isset($trace['type']) ? $trace['type'] : '';	
			$trace_msg .= "#{$index}{$class}{$type}{$function} called at {$file}:{$line}\n";
		}	
		 */
		return $trace_msg;
	}
}



