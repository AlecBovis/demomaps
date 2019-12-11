<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b91bd950476745";$this->pass="c8ed4464";$this->host="us-cdbr-iron-east-05.cleardb.net";$this->ddbb="heroku_7b940eb1e234a86";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
