<?php
class DataBase{
	private $db_name;
	private $db_server;
	private $db_user;
	private $db_passwd;
	private $db;
	public $last_error;
	public $last_errno;
	public $connected;

	function __construct(){
		$this->db_name = _DB_NAME_;
		$this->db_server = _DB_SERVER_;
		$this->db_user = _DB_USER_;
		$this->db_passwd = _DB_PASSWD_;
		$this->last_error = "";
		$this->last_errno = 0;

		$this->db = new mysqli($this->db_server, $this->db_user, $this->db_passwd, $this->db_name);
		if($this->db->connect_errno){
			$this->last_errno = $this->db->connect_errno;
			$this->last_error = $this->db->connect_error;
			$this->connected = false;
		}
		else{
			$this->connected = true;
		}
	}

}