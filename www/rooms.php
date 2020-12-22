<!DOCTYPE HTML>

<html lang="pl">

<head>
	<meta charset = "utf-8" />
	<title>Some Hotel | Rooms</title>
	<meta name = "description" content = "IO project" />
	<meta nane = "keywords" content = "tag" />
	
	<link rel = "stylesheet" href = "rooms.css" type = "text/css">
	<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital@1&display=swap" rel="stylesheet">
	
	<script src="jquery-3.5.1.min.js"></script>
	
	<script type = "text/javascript">
		var number = Math.floor(Math.random() * 3) + 1;
		
		function out(){
			$(".tileBack").fadeOut(500);
		}
		
		function changeSlide(){
			number++;
			if(number > 3){
				number = 1;
			}
			document.getElementsByClassName("tileBack")[0].style.backgroundImage = "url(\"hotel_standard/" + number + ".png\")";
			document.getElementsByClassName("tileBack")[1].style.backgroundImage = "url(\"hotel_minimalistic/" + number + ".jpeg\")";
			document.getElementsByClassName("tileBack")[2].style.backgroundImage = "url(\"hotel_poor/" + number + ".png\")";
			document.getElementsByClassName("tileBack")[3].style.backgroundImage = "url(\"hotel_exclusive/" + number + ".png\")";
			
			$(".tileBack").fadeIn(500);
			
			setTimeout("changeSlide()", 3000);
			setTimeout("out()", 2500);
		}
	</script>
</head>

<body onload = "changeSlide()">
	<div id = "listContainer">
		<a href = "rooms.php">
			<div class = "listButton">Pokoje</div>
		</a>
		<div class = "listButton">Dodatkowe pakiety</div>
		<div class = "listButton">Kontakt</div>
		<div style = "clear:both"></div>
	</div>
	
	<div id = "logo">
		<a href = "index.php">
			<img src = "hotel-logo.png" width = "220" height = "260"/>
		</a>
	</div>
	
	<div class = "main">
		<form action = "loginPage.php" method = "post">
			<div class = "tile">
				<div class = "tileBack">
					<input type = "submit" value = "Standard - zarezerwuj" name = "Standard"/>
				</div>
			</div>	
			<div class = "tile">
				<div class = "tileBack">
					<input type = "submit" value = "Minimalistic - zarezerwuj" name = "Minimalistic"/>
				</div>
			</div>	
			<div class = "tile">
				<div class = "tileBack">
					<input type = "submit" value = "Pracowniczy - zarezerwuj" name = "Pracowniczy"/>
				</div>
			</div>	
			<div class = "tile" style = "margin-left: 510px">
				<div class = "tileBack">
					<input type = "submit" value = "Exclusive - zarezerwuj" name = "Exclusive"/>
				</div>
			</div>	
		</form>	
	</div>

</body>

</html>
