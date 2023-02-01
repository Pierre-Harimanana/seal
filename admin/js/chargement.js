const res= document.querySelector('.tableau');
// var x=setInterval(() => {
var xhr= new XMLHttpRequest();

xhr.open('GET', 'php/chargement.php', true);

xhr.onload=function() {
    if (xhr.readyState==XMLHttpRequest.DONE) {
        if (xhr.status==200) {
            let data = xhr.response;
            res.innerHTML=data;
        }   
    }
}
xhr.send();
// }, 300);