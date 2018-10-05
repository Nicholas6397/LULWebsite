<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Anime Search Engine</title>
		<link rel="stylesheet" type="text/css" href="./style.css">
	</head>

	<body>
		<div class="wrapper"></div>
		<div style="text-align: center;">
			<img class="tigerLogo" src="https://i.pinimg.com/originals/06/fb/09/06fb09b432edcd014b5a5b201847af9d.png"><br>
			<?php

				$serverName = "localhost";
				$serverUsername = $_SERVER["MYSQL_USERNAME"];
				$serverPassword = $_SERVER["MYSQL_PASSWORD"];
				$serverDatabase = $_SERVER["MYSQL_ANIME_DATABASE"];

				$conn = mysqli_connect("$serverName", "$serverUsername", "$serverPassword", "$serverDatabase");
				if (!$conn){
					echo "cannot connect<br>";
				}

				$animeSearch = $_POST["animeSearch"];

				$query = "SELECT * FROM anime WHERE EnglishTitle='$animeSearch'";
				$result = mysqli_query($conn, $query);

			?>
		</div>
	</body>
</html>