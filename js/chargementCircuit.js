const tableau= document.querySelector('.tableau');
var xhr= new XMLHttpRequest();
xhr.open('GET', 'php/chargementCircuit.php', true);
xhr.onload=function() {
    if (xhr.readyState==XMLHttpRequest.DONE) {
        if (xhr.status==200) {
            let data = xhr.response;
            tableau.innerHTML=data;
            console.log('chargement du tableau circuit');
        }   
    }
}
xhr.send();
