<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		$blogName = $_POST["blogName"];
		$blogText = $_POST["blogText"];
		$blogDescripton = substr($blogText, 0, 255);
		$blogDate = date("Y-m-d");

		$serverName = "localhost";
		$serverUsername = $_SERVER["MYSQL_USERNAME"];
		$serverPassword = $_SERVER["MYSQL_PASSWORD"];
		$serverDatabase = $_SERVER["MYSQL_BLOG_DATABASE"];

		$conn = mysqli_connect("$serverName", "$serverUsername", "$serverPassword", "$serverDatabase");
		if (!$conn){
			echo "cannot connect<br>";
		}

		$blogID = rand(1, 999999999);
		$i = true;

		$query = "SELECT blogID FROM blogEntries WHERE blogID='$blogID'";
		$result = mysqli_query($conn, $query);

		while($i == true){
			if(mysqli_num_rows($result)){
				$blogID = rand(1, 999999999);
			}else{
				$i = false;
			}
		}
		$query = "INSERT INTO blogEntries (blogID, blogName, description, blogText, blogDate) VALUES ('$blogID', '$blogName', '$blogDescripton', '$blogText', '$blogDate')";
		mysqli_query($conn, $query);
		mysqli_close($conn);

	?>
	<script type="text/javascript">
		window.location.href="./blog.php"
	</script>

</body>
</html>