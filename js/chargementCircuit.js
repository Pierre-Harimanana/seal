setInterval(() => {
    const tableau= document.querySelector('.contentTable');
    var xhr= new XMLHttpRequest();
    xhr.open('GET', 'php/chargementCircuit.php', true);
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
}, 300);
