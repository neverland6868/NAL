<?php

    session_start();
	error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);


	require_once("/Users/quangpn/Desktop/Project/nal_test1/model/user_model.php");

	$userInfo = $_SESSION["userInfo"];
	var_dump($userInfo);

	$userData = new UserModel();
	$listUser = $userData -> getListUser();

	var_dump($listUser);

	displayByLevel($userInfo["level"], $listUser);

	function displayByLevel($level, $listUser)
	{
		for ($i=0; $i < count($listUser); $i++) { 
			echo "<p>".$listUser[$i]["id"]." --- ".$listUser[$i]["username"]." --- ".$listUser[$i]["fullname"]." --- ".$listUser[$i]["level"];
		}

	}

	include ("/Users/quangpn/Desktop/Project/nal_test1/view/list_user_view.php");

?>