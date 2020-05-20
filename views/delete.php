<?php


		$id = $_GET['id'];
		$con = mysqli_connect('localhost', 'root', '', 'webtech');

		$sql = "delete from users where id='{$id}'";
		if(mysqli_query($con, $sql)){
			header('location: login.html');
		}else{
			echo "Error";
		}
	


