<?php
	session_start();
	error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);


	require_once("/Users/quangpn/Desktop/Project/nal_test1/model/user_model.php");

	if (!isset($_POST["submit"])) {
		include ("/Users/quangpn/Desktop/Project/nal_test1/view/add_user_view.php");
		exit();
	}

	$user = isset($_POST["username"]) ? $_POST["username"] : "";
	$pass = isset($_POST["password"]) ? $_POST["password"] : "";
	$level = isset($_POST["level"]) ? $_POST["level"] : "";
	$fullname = isset($_POST["fullname"]) ? $_POST["fullname"] : "";

	if (empty($user) || empty($pass)) {
		echo "Yêu cầu nhập username & password";
		exit();
	}


	$pass = md5($pass);
	echo "$user --- $pass --- $level --- $fullname";

	$userData = new UserModel();
	$result = 	$userData -> addUser($user, $pass, $fullname, $level);

	if($result)
	{
		echo "Thêm user thành công";
		header("Location: controller/list_user_controller.php");
		exit();

	}
	else
	{
		echo "Lỗi thêm user!!!!";
		exit();
	}

?>