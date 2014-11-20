<?php
	session_start();
	error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);


	require_once("/Users/quangpn/Desktop/Project/nal_test1/model/user_model.php");

	$user = isset($_POST["username"]) ? $_POST["username"] : "";
	$pass = isset($_POST["password"]) ? $_POST["password"] : "";

	if (empty($user) || empty($pass)) {
		//echo "Yêu cầu nhập username & password";
		exit();
	}


	$pass = md5($pass);
	//echo "$user --- $pass";

	$userData = new UserModel();
	$result = $userData -> checkLogin($user, $pass);

	if($result)
	{
		//echo "Login thanh cong!!!!";
		$_SESSION['userInfo'] = $result;
		//var_dump($_SESSION['userInfo']);
		 header("Location: list_user_controller.php");
		exit();
		//var_dump($result);
	}
	else
	{
		echo "Login failt!!!";
		header("Location: index.php");
		exit();
	}