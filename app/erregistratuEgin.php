<?php
$host = $_SERVER['HTTP_HOST'];
require "konexioa.php";
  

session_start();


header( 'X-Content-Type-Options: nosniff' );
header( 'X-Frame-Options: SAMEORIGIN' );
header( 'X-XSS-Protection: 1;mode=block' );
header_remove('X-Powered-By'); 



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
		
		
		$stmt = $conn->prepare("SELECT * FROM erabiltzaileak WHERE email=?"); 
		$stmt->bind_param("s", $email);
		$stmt->execute(); 
		$resEmail= $stmt->get_result(); 
		$rowEmail = mysqli_fetch_array($resEmail);
		
		$stmt = $conn->prepare("SELECT * FROM erabiltzaileak WHERE NAN=?"); 
		$stmt->bind_param("s", $nan);
		$stmt->execute(); 
		$resNan= $stmt->get_result(); 
		$rowNan = mysqli_fetch_array($resNan);
		

		if($rowEmail['Email']==null && $rowNan['NAN']==null){ #erabiltzailea erregistratuta ez badago
		
			$stmt = $conn->prepare("INSERT INTO erabiltzaileak (`NAN`, `Izen_abizenak`,`Telefonoa`,`Jaiotze_data`,`Email`,`Pasahitza`) VALUES (?,?,?,?,?,?)"); 
			$stmt->bind_param("ssisss", $nan, $izena, $telefonoa,$jaio, $email, $hashed_password);
			$stmt->execute(); 
		
			$_SESSION['Email'] = $email; 
			$_SESSION['Izen abizenak'] =$row['Izen_abizenak'] ; 
			
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
                	#habria que poner algoopoo
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
}
else{
	if(!file_exists("./log")){
        	mkdir("./log", 755);
        }
	date_default_timezone_set('Europe/Madrid');
	error_log("127.0.0.1 $email [".date('r')."] 'Erregistratu txarto'".PHP_EOL,3,"./log/login.log");
	header("Location: http://localhost:81/erregistratu.php?txarto=1");
}


?>


<!DOCTYPE html>
<html lang="es">

<header>
<meta http-equiv="Content-Security-Policy" content="default-src 'none';" >
</header>
</html>
