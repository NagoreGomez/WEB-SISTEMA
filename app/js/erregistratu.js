
document.addEventListener("DOMContentLoaded", function(){
	document.getElementById("erregistroa").addEventListener('submit', konprobaketa);
});



    
    
function konprobaketa(evento) { 
   
	const izena= document.getElementById("Izena").value;
	const jaiotza = document.getElementById("Jaiotza").value;
	const telefonoa = document.getElementById("Telefonoa").value;
	const nan = document.getElementById("NAN").value;
	const email = document.getElementById("Email").value;
	const pasahitza1 = document.getElementById("Pasahitza1").value;
	const pasahitza2 = document.getElementById("Pasahitza2").value;
	

	var zenbakiak
	var letra1
	var letra2


 	evento.preventDefault();

 	

     	if (!(/^[a-zA-ZÀ-ÿ\s]{1,50}$/.test(izena))){
		alert("Izen abizenak ez dira egokiak, idatzi berriro mesedez.");
		return;
     	}	
     	console.log("Control 0")
     	
     	if (!(/^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$/.test(jaiotza))){
		alert("Jaiotze data ez da egokia, idatzi berriro mesedez, honelakoa izan behar da: UUUU-HH-EE.");     
		return;
	}	
     	console.log("Control 1")
     	
     	
     	if (!(/^[0-9]{9}$/.test(telefonoa))){
		alert("Telefonoa 9 zenbakiz osatuta egon behar da, idatzi berriro mesedez.");
		return;
     	}
     	console.log("Control 2")
     	
 	
	if (/^[0-9]{8}[A-Z]$/.test(nan)){
		zenbakiak = nan.substr(0,nan.length-1);
	        letra1 = nan.substr(nan.length-1,1);
	        zenbakiak = zenbakiak % 23;
	        letra2='TRWAGMYFPDXBNJZSQVHLCKET';
	        letra2=letra2.substring(zenbakiak,zenbakiak+1);
	         
	        if(letra2!=letra1.toUpperCase()){
	        	alert ("NAN-a ez da egokia, idatzi berriro mesedez.");
	        	return;
	        }
     	}
     	else{
     		alert ("NAN-a ez da egokia, idatzi berriro mesedez.");
	        return;
     	}
     	console.log("Control 3")
     	
     	if (!(/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$/.test(email))){
		egokia=false;
		alert("Helbide elektronikoa ez da egokia, idatzi berriro mesedez.");
		return;
     	}
     	console.log("Control 4")
     	
     	if(pasahitza1!=pasahitza2){
    		alert ("Pasahitzak ez datoz bat.");    		
		return;
		
     	}
     	console.log("Control 5")
     	
  
     	
     	this.submit();
}



	

