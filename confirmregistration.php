<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registration confirmation</title>
		<link rel="stylesheet" type="text/css" href="./style.css">
	</head>
	<body>
		<div class="wrapper"></div>
		<div class="content">
			<img class="tigerLogo" src="https://i.pinimg.com/originals/06/fb/09/06fb09b432edcd014b5a5b201847af9d.png"><br>
			<?php
				$username = $_POST["username"];
				$password = md5($_POST["password"]);

				$serverName = "localhost";
				$serverUsername = $_SERVER["MYSQL_USERNAME"];
				$serverPassword = $_SERVER["MYSQL_PASSWORD"];
				$serverDatabase = $_SERVER["MYSQL_DATABASE"];

				$conn = mysqli_connect("$serverName", "$serverUsername", "$serverPassword", "$serverDatabase");
				if(!$conn){
					echo "cannot connect<br>";
				}

				$query = "SELECT * FROM profiles WHERE username ='$username'";
				$result = mysqli_query($conn, $query);

				if(mysqli_num_rows($result)){
					echo "username is unavailable<br>Click <a style='color: blue' href='.\'>here</a> to return to registration and try a new username";
				} else{
					$query = "INSERT INTO profiles (username, password) VALUES ('$username', '$password')";
					mysqli_query($conn, $query);
					echo "username available<br>Redirecting you in 5 seconds to login page so that you may login";
					?>
					<script type="text/javascript">
						setTimeout(function(){
							window.location.href="../"
						}, 5000);
					</script>
					<?php
				}

				mysqli_close($conn);
			?>
		</div>
	</body>
</html>