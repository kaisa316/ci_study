<?php
//如何进一步封装，提炼  ，比如table_name,db的read,write load

class Test_model extends CI_Model {
	const tbl_name = 'test';

	public function get() {
		$this->load->database();
		//$db = $this->db->select(['name','id'])->where('name','lisi')->where('id >',3)->get(self::tbl_name);
		$db = $this->db->select(['name','id']);
		$db = $db->like('name','lisi','after')->order_by('id','desc')->limit(2)->offset(1)->get(self::tbl_name);
		$result = $db->result();	
		//$result = $this->db->from(self::tbl_name)->like('name','lisi')->count_all_results();
		var_dump($result);
	}

	/**
	 * test 
	 */
	public function get_xx() {
		$this->load->database();	
		$fields = ['name','sex'];
		$data = $this->db->select($fields)->where('sex','man')->where('name','lisi')->get(self::tbl_name)->result();
		print_r($data);	
	}

	public function get_sql() {
		$this->load->database();
		$sql = $this->db->select(['name','id'])->where('name','lisi')->get_compiled_select(self::tbl_name);
		echo $sql;
	}	

	public function update() {
		$this->load->database();
		$update_arr = [
			//'name'=>'lisi_0502',	
			'create_time'=>date('Y-d-d H:i:s'),	
		];	
		/*
		$where_arr = ['id'=>4];
	    $up_result = $this->db->update(self::tbl_name,$update_arr,$where_arr);	
		*/
		//where 子句是能够应用于update的，估计同样也可以用户 delete
	    //$up_result = $this->db->where('id',3)->update(self::tbl_name,$update_arr);	
	    //$up_result = $this->db->like('name','lisi','after')->update(self::tbl_name,$update_arr);	
		var_dump($up_result);	
	}

	public function insert() {
		$this->load->database();
		$data = [
			'name'=>'tiger',	
			'create_time'=>date('Y-m-d H:i:s'),	
		];	
		$result = $this->db->insert(self::tbl_name,$data);
		//$result = $this->db->set($data)->get_compiled_insert(self::tbl_name);
		var_dump($result);
	}

	public function delete() {
		$this->load->database();	
		$result = $this->db->where('id',6)->delete(self::tbl_name);
		var_dump($result);

	}

	public function transaction() {
		$this->load->database();	
		$this->db->trans_start();
		$this->get();
		$this->insert();
		$this->db->trans_complete();	
		if($this->db->trans_status() === false) {
			echo 'fail';	
		} else {
			echo 'success';	
		}
	}


}

?>
