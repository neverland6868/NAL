<?php    
    session_start();
	error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);

	// if(isset($_SESSION['userInfo'])) {
	// 	header("Location: view/list_user_view.php");
	// 	die();
	// }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Test1 --- NAL</title>
</head>
<body>
	<form action="controller/login_controller.php" method="POST">
	Username: <input type="text" name="username"></BR></BR>
	Password: <input type="password" name="password"></BR></BR>
	<input type="submit" name="submit"></BR>
</form>
</body>
</html>

