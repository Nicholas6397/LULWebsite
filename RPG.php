<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>RPG Character Database</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
	<div class="wrapper"></div>
	<div class="content">
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
					?>
					<table class="table">
						<tr>
							<th>Name</th>
							<th>Race</th>
							<th>Subrace</th>
							<th>Class</th>
							<th>Level</th>
							<th>Experience Points</th>
						</tr>
						<tr>
							<?php
							$row = $result->fetch_assoc();
							echo "<td>".$row["name"]."</td>";
							echo "<td>".$row["race"]."</td>";
							echo "<td>".$row["subRace"]."</td>";
							echo "<td>".$row["class"]."</td>";
							echo "<td style='text-align:right;'>".$row["lvl"]."</td>";
							echo "<td style='text-align:right;'>".$row["exp"]."</td>";
							?>
						</tr>
					</table>
					<?php
				} else{
					?>
						<script type="text/javascript">
							window.location.href="./404_RPGID.php";
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
	</div>
</body>
</html>