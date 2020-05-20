<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>
	<h2>Registration Page</h2>
	<form action="" method="post">
		<table>
			<tr>
				<td>ID:</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>email:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>type:</td>
				<td><input type="text" name="type"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="update"></td>
			</tr>
		</table>
	</form>
</body>
</html>




<?php

	$id = $_GET['id'];
	if(isset($_POST['submit'])){
		$id=$_POST['id'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$type = $_POST['type'];

		$con = mysqli_connect('localhost', 'root', '', 'webtech');
/*
		$sql2 = "select username from users where username='{$username}'";
		$result = mysqli_query($con, $sql2);
		$row = mysqli_fetch_assoc($result);
		if($row[]){
		}*/

		$sql = "update users set username='{$username}',password='{$password}',email='{$email}',type='{$type}' where id='{$id}'";
		if(mysqli_query($con, $sql)){
			header('location: login.html');
		}else{
			echo "Error";
		}
	}

?>
