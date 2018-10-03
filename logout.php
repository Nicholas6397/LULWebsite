<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Logout page</title>
		<link rel="stylesheet" type="text/css" href="./style.css">
	</head>

	<body>
		<div class="wrapper"></div>
		<div class="content">
			<img class="tigerLogo" src="https://i.pinimg.com/originals/06/fb/09/06fb09b432edcd014b5a5b201847af9d.png"><br>
			<?php
				echo "logged out<br>You will be automatically redirected in 5 seconds";

				$serverName = "localhost";
				$serverUsername = $_SERVER["MYSQL_USERNAME"];
				$serverPassword = $_SERVER["MYSQL_PASSWORD"];
				$serverDatabase = $_SERVER["MYSQL_DATABASE"];

				$conn = mysqli_connect("$serverName", "$serverUsername", "$serverPassword", "$serverDatabase");

				$cookie_value = $_COOKIE["LSU_TAIGA_LOGIN"];
				$cookie_query = "UPDATE profiles SET cookie_hash='NULL' WHERE cookie_hash='$cookie_value'";
				mysqli_query($conn, $cookie_query);

				setcookie("LSU_TAIGA_LOGIN", "", time() - 3600, '/');

				mysqli_close($conn);
			?>
			<script type="text/javascript">
				setTimeout(function(){
					window.location.href="../";
				}, 5000);
			</script>
		</div>
	</body>
</html>