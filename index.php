<html>
	<head>
		<meta charset="utf-8">
		<title>Славянское Аниме</title>
		<link rel="stylesheet" type="text/css" href="./style.css">
	</head>

	<body>
		<div class="wrapper"></div>
		<div class="content">
			<img class="tigerLogo" src="https://i.pinimg.com/originals/06/fb/09/06fb09b432edcd014b5a5b201847af9d.png"><br>
			<?php
				$secret = mt_rand(0, 1);
				if ($secret == 1){
					echo "<a style='color: blue' href='./anime.php'>Enter if you dare</a>";
				} else{
					echo "Nothing to see here, Камрад";
				}
			?>
			<form style="text-align: center; margin: 0 auto" action="./login.php" method="post">
				Username: <input type="text" name="username"><br>
				Password: <input style="margin-left: 5px; margin-top: 5px" type="password" name="password"><br>
				<input style="margin-top: 5px; margin-left: 100px" type="submit" value="login">
				<input onclick="location.href='./register.php'" type="button" value="register">
			</form>
		</div>
	</body>
</html>