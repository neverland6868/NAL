<?php

	session_start();
	error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);
	require_once("/Users/quangpn/Desktop/Project/nal_test1/model/user_model.php");

	if (!isset($_SESSION["userInfo"])) {
		echo "Permition deny!!!";
		exit();
	}

	$userId = isset($_GET["userId"])?$_GET["userId"]:"";
	if (empty($userId)) {
		echo  "Không có thông tin UserID!!!";
		exit();
	}

	$userData = new UserModel();
	$result = 	$userData -> deleteUser($userId);

	if($result)
	{
		echo "Xóa user thành công";
		header("Location: controller/list_user_controller.php");
		exit();

	}
	else
	{
		echo "Lỗi xóa user!!!!";
		exit();
	}
?>


