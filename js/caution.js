ajoutCaution= document.querySelector('#ajouterCaution');
form= document.querySelector('.bodyModal form');
message= document.querySelector('.error-txt');
form.onsubmit=function(e){
    e.preventDefault();
}

ajoutCaution.onclick=function() {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/insertCaution.php", true);
    xhr.onload=function() {
        if (xhr.readyState==XMLHttpRequest.DONE) {
            if (xhr.status==200) {
                let data = xhr.responseText;
                console.log(data);

                if (data=='reussi') {
                    $('.modal').hide(300);
                    showMessage();
                    $('#snackbar').text('Caution ajoutée');
                } else {
                    $('.error-txt').slideDown(300);
                    $('.error-txt').text(data);
                }
            }
        }
    }
    let formdata = new FormData(form);
    xhr.send(formdata);
}
