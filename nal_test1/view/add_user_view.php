<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>Thêm thông tin user</p>
	<form action="../controller/add_user_controller.php" method="POST">
	<p>Username: <input type="text" name="username"></p>
	<p>Password: <input type="password" name="password"></p>
	<p>Retype Password: <input type="password" name="password"></p>
	<p>Fullname: <input type="text" name="fullname"></p>
	<p>Level:
		<select name="level">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
		</select>
	</p>
	<input type="submit" name="submit">
	</form>
</body>
</html>