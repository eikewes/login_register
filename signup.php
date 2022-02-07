<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		// Register Formular auslesen
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			// In der Datenbank speichern
			// Zufällig generierte 20 stellige userID wird generiert
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Bitte nur gültige Informationen!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/signup.css">
	<title>Regestieren</title>
</head>
<body>

	<style type="text/css">
	

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Regestrieren</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Login</a><br><br>
		</form>
	</div>
</body>
</html>