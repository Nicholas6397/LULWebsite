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
				$secret = mt_rand(0, 100);
				if ($secret == 100){
					echo "<a style='color: blue' href='./anime.php'>Enter if you dare</a><br>";
				} else{
					echo "Nothing to see here, Камрад<br>";
				}
			?>
			<?php
				if(isset($_COOKIE["LSU_TAIGA_LOGIN"])){
					echo "You are logged in<br>";
					?>
					<form style="text-align: center; margin: 0 auto" action="./logout.php" method="post">
						<input type="submit" value="logout">
					</form>
					<?php
				} else{
					?>
					<form style="text-align: center; margin: 0 auto" action="./login.php" method="post">
						<input type="text" name="username" placeholder="username or e-mail"><br>
						<input style="margin-top: 5px" type="password" name="password" placeholder="password"><br>
						<input style="margin-top: 5px" type="submit" value="login">
						<input onclick="location.href='./register.php'" type="button" value="register">
					</form>
					<?php
				}
			?>
			</form>
		</div>
	</body>
</html>