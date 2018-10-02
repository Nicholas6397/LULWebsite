<html>
	<head>
		<meta charset="utf-8">
		<title>Славянское Аниме</title>
		<link rel="stylesheet" type="text/css" href="./style.css">
	</head>
	<body>
		<div class="wrapper2"></div>
		<div class="phpResponse">
		<?php
			$min = 0;
			$max = 1;
			$judgement = mt_rand($min, $max);
			$name = $_POST["name"];
			if ($judgement == 0){
				echo $name . " is shit!<br>";
				echo "Бабушка not approve!";
			} else {
				echo $name . " is good!<br>";
				echo "Бабушка approve!";
			}
		?>
		</div>
		<div>
			<img class="taiga2" src="https://png2.kisspng.com/20180422/zke/kisspng-anime-toradora-taiga-aisaka-lelouch-lamperouge-ma-shopping-online-5adc1663428ff2.0089724415243730912727.png">
			<audio autoplay loop>
				<source src="./hardbass.mp3" type="audio/mpeg">
			</audio>
		</div>
	</body>
</html>