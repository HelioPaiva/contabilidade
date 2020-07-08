<?php

require_once 'conn.php';

class database {

	public function add($sql){
		$conn = conn::getConn()->prepare($sql);
		$conn->execute();
	}
	public function edit($sql){
		$conn = conn::getConn()->prepare($sql);
		$conn->execute();
	}

	public function readAll($sql){
		$conn = conn::getConn()->prepare($sql);
		$conn->execute();
		$result = $conn->fetchAll();
		return $result;
	}

	public function read($sql){
		$conn = conn::getConn()->prepare($sql);
		$conn->execute();
		$result = $conn->fetch(PDO::FETCH_ASSOC);
		return $result;
	}
}