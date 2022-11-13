<?php
$host = $_SERVER['HTTP_HOST'];
require "konexioa.php";
  

session_start();



if (!empty($_POST['csrf'])) {
	if (hash_equals($_SESSION['token'], $_POST['csrf'])) {
	    // Procesar el formulario
	    	$nan= $_POST['NAN'];
		$izena= $_POST['Izena'];
		$jaio= $_POST['Jaiotza'];
		$email= $_POST['Email'];
		$telefonoa= $_POST['Telefonoa'];
		$pasahitza= $_POST['Pasahitza1'];
		
		$hashed_password= password_hash($pasahitza, PASSWORD_DEFAULT);
		#$_SESSION['HashPasahitza']= $hashed_password;
		
		
		$sql ="SELECT * FROM `erabiltzaileak` WHERE `Email` = '$email'";
		$query = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($query);

		if($row['Email']==null){ #erabiltzailea erregistratuta ez badago
			$sql="INSERT INTO `erabiltzaileak` (`NAN`, `Izen abizenak`,`Telefonoa`,`Jaiotze data`,`Email`,`Pasahitza` ) VALUES ('$nan', '$izena', '$telefonoa','$jaio', '$email', '$hashed_password')";
			$query = mysqli_query($conn, $sql);
			$_SESSION['Email'] = $email; 
			$_SESSION['Izen abizenak'] =$row['Izen abizenak'] ; 
			
			if(!file_exists("./log")){
                            mkdir("./log", 755);
                	}
			date_default_timezone_set('Europe/Madrid');
			error_log("127.0.0.1 $email [".date('r')."] 'Erregistratu ondo'".PHP_EOL,3,"./log/login.log");
			header("Location: http://localhost:81/erabiltzailearenMenua.php"); 
		}
		else{
			if(!file_exists("./log")){
                            mkdir("./log", 755);
                	}
			date_default_timezone_set('Europe/Madrid');
			error_log("127.0.0.1 $email [".date('r')."] 'Erregistratu txarto'".PHP_EOL,3,"./log/login.log");
			header("Location: http://localhost:81/erregistratu.php?txarto=1");
		}
    

	}else{
		if(!file_exists("./log")){
                	mkdir("./log", 755);
                }
 		date_default_timezone_set('Europe/Madrid');
		error_log("127.0.0.1 $email [".date('r')."] 'Erregistratu txarto'".PHP_EOL,3,"./log/login.log");
		header("Location: http://localhost:81/erregistratu.php?txarto=1");
 	}
}
else{
	if(!file_exists("./log")){
        	mkdir("./log", 755);
        }
	date_default_timezone_set('Europe/Madrid');
	error_log("127.0.0.1 $email [".date('r')."] 'Erregistratu txarto'".PHP_EOL,3,"./log/login.log");
	header("Location: http://localhost:81/erregistratu.php?txarto=1");
}

header_remove('X-Powered-By');

?>

