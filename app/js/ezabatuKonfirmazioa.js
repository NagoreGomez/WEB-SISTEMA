function ezabatuKonfirmazioa(Id){ 
    var res = window.confirm('Ziur zaude ibilbidea ezabatu nahi duzula?');
    if(res) {
    	window.open("ibilbideEzabaketaEgin.php?Id="+Id);
    
    }
    
    else console.log("Ez du ezabatu nahi");;
    
}



