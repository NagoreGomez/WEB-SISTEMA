
document.addEventListener("DOMContentLoaded", function(){
	document.getElementById("ibilbideaAldatu").addEventListener('submit', konprobaketa);
});


    
    
    
function konprobaketa(evento) { 
   
	const zailtasuna= document.getElementById("Zailtasuna").value;
	const distantzia = document.getElementById("Distantzia").value;
	const desnibela = document.getElementById("Desnibela").value;

 	evento.preventDefault();

 	
     	if (!(/^[a-zA-ZÀ-ÿ\s]{1,50}$/.test(zailtasuna))){
		alert("Zailtasuna ez da egokia, idatzi berriro mesedez, Erraza/Ertaina/Zaila.");
		return;
     	}	
     	console.log("Control 0")
     	
     	if (!(/^[0-9]{1,50}$/.test(distantzia))){
		alert("Distantzia ez da egokia, idatzi berriro mesedez.");
		return;
     	}
     	console.log("Control 1")
     	if (!(/^[0-9]{1,50}$/.test(desnibela))){
		alert("Desnibela ez da egokia, idatzi berriro mesedez.");
		return;
     	}
     	console.log("Control 2")

     	this.submit();
}



	

