<?php

defined ("DB_SERVER") or define ("DB_SERVER", "localhost");
defined ("DB_USERNAME") or define ("DB_USERNAME", "root");
defined ("DB_PASSWORD") or define ("DB_PASSWORD", "");
defined ("DB_DATABASE") or define ("DB_DATABASE", "deepsmoke");

class DBMS {
	private static $_instance = NULL;
	
	private $_mysqli = NULL;
	
	private function __construct() {}
	
	private function connect_mysqli() {
		$this->_mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
		
		if (mysqli_connect_errno()) {
			die('Error has occurred @ line 19 where DBMS, 
				please contact an web developer to solve this issue');
		}
	}
	
	private function close_mysqli() {
		$this->getConnection()->close();
	}
	
	public function getConnection() {
		if ($this->_mysqli == NULL) {
			$this->connect_mysqli();
		}
		return $this->_mysqli;
	}
	
	public static function getInstance() {
		if (!(self::$_instance instanceof self)) {
			self::$_instance = new self();
		}
		
		return self::$_instance;
	}
}