<?php 
class ConfigDb {
	private $params;

	function get($param1, $param2) {
		return $this->params[$param1][$param2];
	}

	function __construct() {
		$this->params = array (
			'database' => array (
				'server' => 'localhost', 
				'login' => 'mylogin', 
				'password' => 'password', 
				'dbname' => 'db', 
				'charset' => 'utf8'
			), 
			'mail' => array (
				'adress' => 'siteadress',
				'adminemail' => 'admin@site.com'
			),
		);
	}
}
?>