<?php


require "konexioa.php";

session_start();



if (!empty($_POST['csrf'])) {
	if (hash_equals($_SESSION['token'], $_POST['csrf'])) {
		// Procesar el formulario
		$email= $_POST['Email'];
		$pasahitza= $_POST['Pasahitza'];
		$izena= $_POST['Izen abizenak'];


		$sql ="SELECT * FROM `erabiltzaileak` WHERE `Email` = '$email' and `Pasahitza` = '$pasahitza'";
		$query = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($query);

		if($row['Email']!=null){ #erabiltzailea erregistratuta egotekotan 
			$_SESSION['Email'] = $email;  
			$_SESSION['Izen abizenak'] =$row['Izen abizenak'] ; 
			date_default_timezone_set('Europe/Madrid');
			error_log("127.0.0.1 $email [".date('r')."] 'Login ondo'".PHP_EOL,3,"./log/login.log");
			header("Location: http://localhost:81/erabiltzailearenMenua.php");     
		}
		else {
			date_default_timezone_set('Europe/Madrid');
			error_log("127.0.0.1 $email [".date('r')."] 'Login txarto'".PHP_EOL,3,"./log/login.log");
			header("Location: http://localhost:81/index.php?txarto=1");
		}
  
	}else{
 		date_default_timezone_set('Europe/Madrid');
		error_log("127.0.0.1 $email [".date('r')."] 'Login txarto'".PHP_EOL,3,"./log/login.log");
		header("Location: http://localhost:81/index.php?txarto=1");
 	}
}
else{

	date_default_timezone_set('Europe/Madrid');
	error_log("127.0.0.1 $email [".date('r')."] 'Login txarto'".PHP_EOL,3,"./log/login.log");
	header("Location: http://localhost:81/index.php?txarto=1");
}
    
    
?>
