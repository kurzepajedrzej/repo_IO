<?php
	session_start();
	require_once "connect.php";

	if(isset($_POST['name'])){
		$verify = true;
		
		$name = $_POST['name'];
		if(strlen($name) < 3){
			$verify = false;
			$_SESSION['e_name'] = "Imię musi być dłuższe od 3";
		}
		
		$surname = $_POST['surname'];
		$adress = $_POST['adress'];
		
		$phoneNumber = $_POST['phoneNumber'];
		if(is_numeric($phoneNumber) == false){
			$verify = false;
			$_SESSION['e_phoneNumber'] = "Numer kontaktowy nie może być pusty ani zawierać liter";
		}
		
		$pesel = $_POST['pesel'];
		if(is_numeric($pesel) == false){
			$verify = false;
			$_SESSION['e_pesel'] = "Pesel nie może być pusty ani zawierać liter";
		}
		
		mysqli_report(MYSQLI_REPORT_STRICT);
	    	try{
			$connection = new mysqli($host, $db_user, $db_surname, $db_name);
			if($connection->connect_errno != 0){
				throw new Exception(myslqi_connect_errno());
			}
			else{
				//email exist
				$result = $connection->query("SELECT id FROM clients WHERE name = '$name' AND surname = '$surname'");
				if(!$result) throw new Exception($connection->error);
				
				$howMuchRecords = $result->num_rows;
				if($howMuchRecords > 0){
					$verify = false;
					$_SESSION['e_name'] = "Użytkownik jest już w bazie danych";
				}
				
				if($verify == true){
					$room = $_SESSION['which'];
					if($connection->query("INSERT INTO clients VALUES(NULL, '$name', '$surname', '$pesel', '$adress', '$phoneNumber', '$room')")){
						$_SESSION['done'] = true;
						$_SESSION['name'] = $name;
						$_SESSION['surname'] = $surname;
						header('Location: index.php');
					}
					else{
						throw new Exception($connection->error);
					}
				}
				
				$connection->close();
				exit();
			}
		}
		catch(Exception $err){
			echo '<span style = "color: red;">Błąd servera. ;(</span>';
			echo '<br/>Więcej informacji: '.$err;
			exit();
		}
		
		if(isset($_SESSION['e_name'])){
			echo '<div class = "error">'.$_SESSION['e_name'].'</div>';
			unset($_SESSION['e_name']);
		}
		if(isset($_SESSION['e_pesel'])){
			echo '<div class = "error">'.$_SESSION['e_pesel'].'</div>';
			unset($_SESSION['e_pesel']);
		}
		if(isset($_SESSION['e_phoneNumber'])){
			echo '<div class = "error">'.$_SESSION['e_phoneNumber'].'</div>';
			unset($_SESSION['e_phoneNumber']);
		}
    	}

?>
