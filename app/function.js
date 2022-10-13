document.addEventListener("DOMContentLoaded", function(){
	document.getElementById("erregistroa").addEventListener('submit', konprobaketa);
});


    
    
    
function konprobaketa(evento) { 
    evento.preventDefault();
    var jaiotza = document.getElementById("Jaiotza").value;
    var telefonoa = document.getElementById("Telefonoa").value;
    var nan = document.getElementById("NAN").value;
    var email = document.getElementById("Email").value;
    var pasahitza1 = document.getElementById("Pasahitza1").value;
    var pasahitza2 = document.getElementById("Pasahitza2").value;

    if(pasahitza1!=pasahitza2){
    		alert ("Pasahitzak ez datoz bat.");
		return;
     }
     this.submit();
}

