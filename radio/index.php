<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Radio Player</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
	
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"> </script>

		<script type="text/javascript">
			$(function() {

				var people = [];

			   	$.getJSON('playlist.json', function(data) {
			       $.each(data.person, function(i, f) {
			          var tblRow = "<tr>" + "<td>" + f.firstName + "</td>" +
			           "<td>" + f.lastName + "</td>" + "<td>" + f.job + "</td>" + "<td>" + f.roll + "</td>" + "</tr>"
			           $(tblRow).appendTo("#userdata tbody");
			    	});
				});
			});
		</script>
	</head>

	<body>
		<div class="wrapper"></div>
		<div class="content">
			<div style="margin-top: 10px;">
				<input id="play" type="button" value="Play" />
			</div>
			<div>
				Volume:
				<input id="volume" type="range" min="0" max="10" value="5" />
			</div>
				<div class="profile">
				  	<table id= "userdata" border="2">
         			<thead>
			            <th>First Name</th>
			            <th>Last Name</th>
			            <th>Email Address</th>
			            <th>City</th>
				    </thead>
				   	<tbody>
			       </tbody>
				</table>
			</div>
			<script type="text/javascript">
				var audio = new Audio("./songs/hardbass.mp3");

				var state = false;

				var play = document.getElementById("play");
				play.addEventListener("click", function(){
					if (state == false){
						audio.play();
						state = true;
						play.value = "Pause";
					}else{
						audio.pause();
						state = false;
						play.value = "Play";
					}
				}, false);
			</script>
		</div>
	</body>
</html>