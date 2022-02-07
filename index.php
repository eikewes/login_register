<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>Du hast dich erfolgreich angemeldet!</h1>

	<br>
	Hallo, <?php echo $user_data['user_name']; ?>
</body>
</html>