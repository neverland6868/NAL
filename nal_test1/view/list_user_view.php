<!DOCTYPE html>
<html>
<head>
	<title>List user</title>

	<script type="text/javascript">
		
		function addUserClick(urlLink){
			window.location = urlLink;
		}

		function editUserClick(userId){
			//alert(userId);
			window.location.href = "/controller/edit_user_controller.php?userId=" + userId;
		}

		function deleteUserClick(userId){
			alert(userId);
			window.location.href = "/controller/delete_user_controller.php?userId=" + userId;
		}

	</script>
</head>
<body>

<p>Show thông tin user:<?php var_dump($listUser); ?></p>

<p><button onclick="addUserClick('/controller/add_user_controller.php')">Add</button></p>

<table style="width:50%" border="1">
<tr>
	<th>UserID</th>
	<th>Username</th>
	<th>Fullname</th>
	<th>Level</th>
	<th colspan="2">Action</th>
</tr>
<?php foreach($listUser as $user): ?>
	<tr>
		<td id="userId"> <?php  echo $user["id"]; ?> </td>
		<td id="userName"> <?php  echo $user["username"]; ?> </td>
		<td id="fullName"> <?php  echo $user["fullname"]; ?> </td>
		<td id="level"> <?php  echo $user["level"]; ?> </td>
		<td><button id="'<?php  echo $user["id"]; ?>'" onclick="editUserClick(this.id)">Edit</button></td>
		<td><button id="'<?php  echo $user["id"]; ?>'" onclick="deleteUserClick(this.id)">Delete</button></td>
	</tr>

<?php endforeach; ?>
</table>
</body>
</html>