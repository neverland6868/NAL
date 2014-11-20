<?php
	error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);
/**
* User controller class
*/
require_once("/Users/quangpn/Desktop/Project/nal_test1/config/db.php");

class UserModel extends Db
{
	public function checkLogin($userName, $passWord){
		$query = "SELECT id, username, fullname, level  FROM tbl_user WHERE `username`='".$userName."' AND `password`='".$passWord."'";
		//var_dump($query);
		$result = $this -> selectOne($query);
		//var_dump($result);
		return $result;
	}

	public function getListUser(){
		$query = "SELECT id, username, fullname, level FROM tbl_user LIMIT 0,10";
		var_dump($query);
		$result = $this -> select($query);
		var_dump($result);
		return $result;
	}

	public function addUser($userName, $passWord, $fullName, $level){
		$query = "INSERT INTO tbl_user(`username`, `password`, `fullname`, `level`) VALUES('".$userName."', '".$passWord."', '".$fullName."', '".$level."')";
		var_dump($query);
		$result = $this -> execute($query);
		var_dump($result);
		return $result;
	}

	public function  getUserById($userId)
	{
		$query = "SELECT id, username, fullname, level  FROM tbl_user WHERE `id`=".$userId;
		var_dump($query);
		$result = $this -> selectOne($query);
		var_dump($result);
		return $result;
	}

	public function editUser($userId, $fullName, $passWord = "", $level){
		if (!empty($passWord))
			$query = "UPDATE tbl_user SET fullname='".$fullName."', password='".$passWord."' level='".$level."' WHERE userId='".$userId."'";
		else
			$query = "UPDATE tbl_user SET fullname='".$fullName."', level='".$level."' WHERE id='".$userId."'";

		var_dump($query);
		$result = $this -> execute($query);
		var_dump($result);
		return $result;
	}

	public function deleteUser($userId){
		$query = "DELETE FROM tbl_user WHERE id=".$userId;
		var_dump($query);
		$result = $this -> execute($query);
		var_dump($result);
		return $result;
	}

}


?>