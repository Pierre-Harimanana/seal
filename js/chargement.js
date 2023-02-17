setInterval(() => {
        const res= document.querySelector('.tableau');
        var xhr= new XMLHttpRequest();

        xhr.open('GET', 'php/chargement.php', true);

        xhr.onload=function() {
            if (xhr.readyState==XMLHttpRequest.DONE) {
                if (xhr.status==200) {
                    let data = xhr.response;
                    if (!searchBar.classList.contains('active')) {
                        res.innerHTML=data;
                    }
                }   
            }
        }
    xhr.send();
}, 300);