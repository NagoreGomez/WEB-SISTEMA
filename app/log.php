<?php


require "konexioa.php";


session_start();





if (!empty($_POST['csrf'])) {
	if (hash_equals($_SESSION['token'], $_POST['csrf'])) {
		// Procesar el formulario
		$email= $_POST['Email'];
		$pasahitza= $_POST['Pasahitza'];
		$izena= $_POST['Izen abizenak'];
		
		
		$sql ="SELECT * FROM `erabiltzaileak` WHERE `Email` = '$email'";
		$query = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($query);
		
		if($row['Email']!=null){ #erabiltzailea erregistratuta egotekotan, pasahitzak aztertu
			$_SESSION['Email'] = $email;  
			$_SESSION['Izen abizenak'] =$row['Izen abizenak'];
			
			$hash_pasahitza =$row['Pasahitza'] ;  #email horren hash pasahitza lortu
			
			if (password_verify($pasahitza, $hash_pasahitza)) { #pasahitzak konparatu
				if(!file_exists("./log")){
                            		mkdir("./log", 755);
                		}
				date_default_timezone_set('Europe/Madrid');
				error_log("127.0.0.1 $email [".date('r')."] 'Login ondo'".PHP_EOL,3,"./log/login.log");
				header("Location: http://localhost:81/erabiltzailearenMenua.php");   
				
			}
			else{ #pasahitza ez da egokia
				if(!file_exists("./log")){
                            		mkdir("./log", 755);
                		}
				date_default_timezone_set('Europe/Madrid');
				error_log("127.0.0.1 $email [".date('r')."] 'Login txarto'".PHP_EOL,3,"./log/login.log");
				header("Location: http://localhost:81/index.php?txarto=1");
			}   
		}
		else { # email ez dago
			if(!file_exists("./log")){
                            mkdir("./log", 755);
                	}
			date_default_timezone_set('Europe/Madrid');
			error_log("127.0.0.1 $email [".date('r')."] 'Login txarto'".PHP_EOL,3,"./log/login.log");
			header("Location: http://localhost:81/index.php?txarto=1");
		}
  
	}else{ #token ezberdinak
		if(!file_exists("./log")){
                	mkdir("./log", 755);
                }
 		date_default_timezone_set('Europe/Madrid');
		error_log("127.0.0.1 $email [".date('r')."] 'Login txarto'".PHP_EOL,3,"./log/login.log");
		header("Location: http://localhost:81/index.php?txarto=1");
 	}
}
else{ #token hutsa
	if(!file_exists("./log")){
        	mkdir("./log", 755);
        }
	date_default_timezone_set('Europe/Madrid');
	error_log("127.0.0.1 $email [".date('r')."] 'Login txarto'".PHP_EOL,3,"./log/login.log");
	header("Location: http://localhost:81/index.php?txarto=1");
}
    
header_remove('X-Powered-By');
    
?>
