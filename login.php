<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login page</title>
		<link rel="stylesheet" type="text/css" href="./style.css">
	</head>

	<body>
		<div class="wrapper"></div>
		<div class="content">
			<img class="tigerLogo" src="https://i.pinimg.com/originals/06/fb/09/06fb09b432edcd014b5a5b201847af9d.png"><br>
			<?php
			
				$serverName = "localhost";
				$serverUsername = $_SERVER["MYSQL_USERNAME"];
				$serverPassword = $_SERVER["MYSQL_PASSWORD"];
				$serverDatabase = $_SERVER["MYSQL_DATABASE"];

				$conn = mysqli_connect("$serverName", "$serverUsername", "$serverPassword", "$serverDatabase");
				if (!$conn){
					echo "cannot connect<br>";
				} else{
					echo "connection successful<br>";
				}

				$username = $_POST["username"];
				$password = md5($_POST["password"]);

				$query = "SELECT * FROM profiles WHERE username='$username' AND password='$password'";
				$result = mysqli_query($conn, $query);

				if (mysqli_num_rows($result)){
					$cookie_value = md5($_POST['username']);
					$cookie_query = "UPDATE profiles SET cookie_hash='$cookie_value' WHERE username='$username' AND password='$password'";
					mysqli_query($conn, $cookie_query);
					setcookie("LSU_TAIGA_LOGIN", $cookie_value, time() + 3600, '/');
					echo "logged in<br>You will be automatically redirected in 5 seconds";
					?>
					<script type="text/javascript">
						setTimeout(function(){
							window.location.href="../";
						}, 5000);
					</script>
					<?php
				}else{
					echo "invalid username/password combination<br>Click <a style='color: blue' href='../'>here</a> to return to the homepage<br>";
				}

				mysqli_close($conn);
			?>
		</div>
	</body>
</html>