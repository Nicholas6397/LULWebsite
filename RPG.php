<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>RPG Character Database</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
	<div class="wrapper"></div>
	<?php
		$characterID = $_GET['id'];
		if (is_numeric($characterID)){
			if ($characterID==NULL){
				?>
					<script type="text/javascript">
						window.location.href="./404.php";
					</script>
				<?php
			}else{
				$serverName = "localhost";
				$serverUsername = $_SERVER["MYSQL_USERNAME"];
				$serverPassword = $_SERVER["MYSQL_PASSWORD"];
				$serverDatabase = $_SERVER["MYSQL_RPG_DATABASE"];

				$conn = mysqli_connect("$serverName", "$serverUsername", "$serverPassword", "$serverDatabase");
				if(!$conn){
					echo "cannot connect to database<br>";
				}

				$query = "SELECT * FROM characters WHERE characterID = '$characterID'";
				$result = mysqli_query($conn, $query);
				if(mysqli_num_rows($result)){
					echo "Character found<br>";
				} else{
					?>
						<script type="text/javascript">
							window.location.href="./404.php";
						</script>
					<?php
				}

			}
		}else{
			?>
				<script type="text/javascript">
					window.location.href="./404.php";
				</script>
			<?php
		}
	?>
</body>
</html>