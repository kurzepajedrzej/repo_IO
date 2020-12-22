<!DOCTYPE HTML>

<html lang="pl">

<head>
	<meta charset = "utf-8" />
	<title>Some Hotel</title>
	<meta name = "description" content = "IO project" />
	<meta nane = "keywords" content = "tag" />
	
	<link rel = "stylesheet" href = "index.css" type = "text/css">
	<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital@1&display=swap" rel="stylesheet">
	
</head>

<body>
	<div id = "listContainer">
		<a href = "rooms.php">
			<div class = "listButton">Pokoje</div>
		</a>
		<div class = "listButton">Dodatkowe pakiety</div>
		<div class = "listButton">Kontakt</div>
	</div>
	
	<div id = "logo">
		<a href = "index.php">
			<img src = "hotel-logo.png" width = "220" height = "260"/>
		</a>
	</div>
	
	<?php
		session_start();
		if(isset($_SESSION['done'])){
			echo "<h1 style = 'color: white;'>Dziękujemy ".$_SESSION['name']." ".$_SESSION['surname']." za dokonanie rezerwacji!</h1>";
			unset($_SESSION['done']);
		}
	?>



</body>

</html>
