<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registration page</title>
		<link rel="stylesheet" type="text/css" href="./style.css">
	</head>

	<body>
		<div class="wrapper"></div>
		<div class="content">
			<img class="tigerLogo" src="https://i.pinimg.com/originals/06/fb/09/06fb09b432edcd014b5a5b201847af9d.png"><br>
			<?php
				$username = $_POST["username"];
				$password = $_POST["password"];
				echo $username . " " . $password;
			?>
		</div>
	</body>
</html>