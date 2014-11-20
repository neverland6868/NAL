<?php
	error_reporting(E_ALL);
	//yeu cau dang nhap truoc khi vao file
	// if(isset($_SESSION['userInfo'])) {
	// 	header("Location: view/list_user_view.php");
	// 	die();
	// }

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>Sửa thông tin user <?php echo $result["username"]; ?> </p>
	<form action="../controller/edit_user_controller.php" method="POST">
	<p>Username: <input type="text" name="userId" value="<?php echo $result["id"]; ?>" readonly></p>
	<p>Username: <input type="text" name="username" value="<?php echo $result["username"]; ?>" readonly></p>
	<p>Password: <input type="password" name="password"></p>
	<p>Retype Password: <input type="password" name="password"></p>
	<p>Fullname: <input type="text" name="fullname" value="<?php echo $result["fullname"]; ?>"></p>
	<p>Level:
		<select name="level">
			<option value="1" <?php if($result["level"]==1) echo "selected"; ?> >1</option>
			<option value="2" <?php if($result["level"]==2) echo "selected"; ?> >2</option>
			<option value="3" <?php if($result["level"]==3) echo "selected"; ?> >3</option>
		</select>
	</p>
	<input type="submit" name="submit">
	</form>
</body>
</html>