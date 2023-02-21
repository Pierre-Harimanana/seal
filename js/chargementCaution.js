setInterval(charge, 600);

function charge() {
    const tableau= document.querySelector('.contentTable');
    var xhr= new XMLHttpRequest();
    xhr.open('GET', 'php/chargementCaution.php', true);
    xhr.onload=function() {
        if (xhr.readyState==XMLHttpRequest.DONE) {
            if (xhr.status==200) {
                let data = xhr.response;

                if (!searchBar.classList.contains('active')) {
                    tableau.innerHTML=data;
                }
            }   
        }
    }
    xhr.send();    
}