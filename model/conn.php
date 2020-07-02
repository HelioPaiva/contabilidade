<?php

class conn {
	private static $conn;

	public static function getConn(){
		$db_host = "localhost";
		$db_name = "mori";
		$db_user = "root";
		$db_password = "";

		if (!isset(self::$conn)) {
			self::$conn = new \PDO('mysql:host='.$db_host.';dbname='.$db_name.';charset=utf8',$db_user,$db_password);	
		}
		return self::$conn;
	}
}