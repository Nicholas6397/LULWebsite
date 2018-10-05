<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Blog</title>
		<link rel="stylesheet" type="text/css" href="./blogStyle.css"></link>
	</head>

	<body>

		<div class="header">
			<h2>Blog</h2>
		</div>
		<div>
			<div class="column">
				<div class="card">
					<?php

						$serverName = "localhost";
						$serverUsername = $_SERVER["MYSQL_USERNAME"];
						$serverPassword = $_SERVER["MYSQL_PASSWORD"];
						$serverDatabase = $_SERVER["MYSQL_BLOG_DATABASE"];

						$conn = mysqli_connect("$serverName", "$serverUsername", "$serverPassword", "$serverDatabase");
						if (!$conn){
							echo "cannot connect<br>";
						}


						$query = "SELECT * FROM blogEntries WHERE id IN (SELECT max(id) FROM blogEntries)";

						$result = mysqli_query($conn, $query);
						$result = $result->fetch_assoc();

						echo "<h2>".$result["blogName"]."</h2>";
						echo "<h5>".$result["blogDate"]."</h5>";
						echo "<p>".$result["description"]."</p>";
						?>
						</div>
						<div class="card">
						<?php

						$query = "SELECT * FROM blogEntries WHERE id IN (SELECT max(id)-1 FROM blogEntries)";
						$result = mysqli_query($conn, $query);
						$result = $result->fetch_assoc();

						echo "<h2>".$result["blogName"]."</h2>";
						echo "<h5>".$result["blogDate"]."</h5>";
						echo "<p>".$result["description"]."</p>";

					?>
				</div>
			</div>
		</div>

	</body>
</html>
