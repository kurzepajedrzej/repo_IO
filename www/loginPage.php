<!DOCTYPE HTML>

<html lang="pl">

<head>
	<meta charset = "utf-8" />
	<title>Some Hotel | Login</title>
	<meta name = "description" content = "IO project" />
	<meta nane = "keywords" content = "tag" />
	
	<link rel = "stylesheet" href = "login.css" type = "text/css">
	<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital@1&display=swap" rel="stylesheet">
	
</head>

<body>
	<form action = "login.php" method = "post" id = "loginContainer">
		<?php
			session_start();
			
			if(isset($_POST['Standard'])){
        			$which = "Standard";
    			}
		    	if(isset($_POST['Minimalistic'])){
				$which = "Minimalistic";
		    	}
		    	if(isset($_POST['Pracowniczy'])){
				$which = "Pracowniczy";
		    	}
		    	if(isset($_POST['Exclusive'])){
				$which = "Exclusive";
		    	}
		    	
		    	$_SESSION['which'] = $which;
    	
    			echo "<h1>Wybrano pokój: ".$which."</h1>";
		?>
		Imię:</br><input type = "text" name = "name"/> <br/>
		Nazwisko:</br><input type = "text" name = "surname"/> <br/>
		Pesel:</br><input type = "text" name = "pesel"/> <br/>
		Adres:</br><input type = "text" name = "adress" placeholder="ul. - nr. - miasto"/> <br/>
		Numer kontaktowy:</br><input type = "text" name = "phoneNumber"/> <br/>
		<input type = "submit" value = "zarezerwuj"/>
		
	</form>
	
	
	<div id = "logo">
		<a href = "index.php">
			<img src = "hotel-logo.png" width = "220" height = "260"/>
		</a>
	</div>



</body>

</html>
