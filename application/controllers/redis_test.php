<?php

class Redis_test extends CI_Controller {
	private $redis ;

	public function __construct() {
		parent::__construct();	
		$this->redis = new Redis();
		$this->redis->connect('127.0.0.1', 6379);
	}


	public function test() {
		$this->hash_test();
		//$this->string_test();
	}	

	private function hash_test() {
		/*数据结构如下：
scid 2003 => {scid=2003,name=,img=>}
     2004 => {scid=2004,name=,img=>}
     2005 => {scid=2005,name=,img=>}
     2006 => {scid=2006,name=,img=>}
     2007 => {scid=2007,name=,img=>}

我想同时获取key值2004,2005,2006对应的值
		 */
		$data = array(
			'2003'=>'{name=zhangsan2,img=xxx}',	
			'2004'=>'{name=lisi2,img=xxx}',	
			'2005'=>'{name=wangwu,img=xxx}',	
			'2006'=>'{name=zhaoqian,img=xxx}',	
			'2007'=>'{name=sunli,img=xxx}',	
			'2008'=>'{name=zhouwu,img=xxx}',	
		);
		$this->redis->hMSet('scid',$data);

		$field = array(2004,2005,'laojia');
		$value = $this->redis->hMGet('scid',$field);
		print_r($value);
		//$value2 = $this->redis->hGet('scid',2004);
		//print_r($value2);
		
	}

	private function string_test() {
		/*
		$this->redis->set('name','zhangsan');	
		$value = $this->redis->get('name');	
		 */
		$data = array(
			'name'=>'zhangsan',	
			'name2'=>'lisi',	
			'name3'=>'lisi3',	
		);
		$this->redis->mset($data);
		$value = $this->redis->mget(array('name','name3'));
		$value = $this->redis->get('name3');
		var_dump($value);
	}

	private function set_test() {
	
		
	}

}


?>
