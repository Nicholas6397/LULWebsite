<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Blog Creation</title>
		<link rel="stylesheet" type="text/css" href="./style.css">
	</head>
	<body>
		<div class="wrapper"></div>
		<form style="text-align: center; margin: 0 auto" action="./blogSubmit.php" method="post">
			<input style="padding-right: 100px" type="text" name="blogName" placeholder="Blog Title"><br>
			Entry:<br>
			<input style="padding-right: 100px;padding-bottom: 250px" type="text" name="blogText"><br>
			<input style="margin-top: 5px" type="submit" value="create blog entry">
		</form>

	</body>
</html>