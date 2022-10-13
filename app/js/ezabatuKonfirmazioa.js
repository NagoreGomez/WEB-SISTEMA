function ezabatuKonfirmazioa(izena){
	alert("aaa")
    var res = window.confirm(izena+' ibilbidea ezabatu nahi duzu?');
    if(res) window.location.href = "../ibilbideEzabaketaEgin.php?id=" + izena;
    else console.log("Ez");
}


/* HAU DA EZABATU BOTOIA, ALDATU BEHAR DENA

                  <!-- <td class=letra><button  onclick='ezabatuKonfirmazioa('.$row['Ibilbidearen izena'].')' class=ezabatu-submit>Ezabatu</button></td> -->
                  
                  
 */
