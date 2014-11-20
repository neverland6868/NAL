<?php
	session_start();
	error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);


	require_once("/Users/quangpn/Desktop/Project/nal_test1/model/user_model.php");

	//kiem tra permission
	if (!isset($_SESSION["userInfo"])) {
		echo "Permission deny!!!";
		exit();
	}

	//kiem tra neu la display thong tin user
	if (!isset($_POST["submit"])) {
		displayUserInfo();
	}
	else {
		updateUserInfo();
	}


	function  displayUserInfo(){

		$userId = isset($_GET["userId"])?$_GET["userId"]:"";
		if (empty($userId)) {
			echo  "Không có thông tin UserID!!!";
			exit();
		}

		$userData = new UserModel();
		$result = 	$userData -> getUserById($userId);

		if($result)
		{
			echo "Lấy thông tin user thành công!!!";
			include ("/Users/quangpn/Desktop/Project/nal_test1/view/edit_user_view.php");
			//header("Location: controller/list_user_controller.php");
			exit();

		}
		else
		{
			echo "Không tìm thấy user!!!!";
			exit();
		}
	}

	function  updateUserInfo(){
		$userId = isset($_POST["userId"]) ? $_POST["userId"] : "";
		$user = isset($_POST["username"]) ? $_POST["username"] : "";
		$pass = isset($_POST["password"]) ? $_POST["password"] : "";
		$level = isset($_POST["level"]) ? $_POST["level"] : "";
		$fullname = isset($_POST["fullname"]) ? $_POST["fullname"] : "";

		if (empty($userId) || empty($user)) {
			echo "Không có thông tin username!!!";
			exit();
		}

		if (!empty($pass)) {
			$pass = md5($pass);
		}

		echo "$user --- $pass --- $level --- $fullname";

		$userData = new UserModel();
		$result = $userData -> editUser($userId, $fullname, $pass, $level);

		if($result)
		{
			echo "Sửa thông tin user thành công";
			header("Location: controller/list_user_controller.php");
			exit();

		}
		else
		{
			echo "Lỗi sửa thông tin user!!!!";
			exit();
		}
	}

?>