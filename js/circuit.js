let boutonAdd= document.querySelector('#ajouterCircuit');
let form= document.querySelector('.modal-content form');

form.onsubmit=function(e){
    e.preventDefault();
}

boutonAdd.onclick=function() {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/circuit.php", true);
    xhr.onload=function() {
        if (xhr.readyState==XMLHttpRequest.DONE) {
            if (xhr.status==200) {
                let data = xhr.responseText;
                if(data !== 'succes'){
                    $('.messageBox').slideDown(200);
                    $('.error-txt').text(data);
                }else{
                    $('#snackbar').text('ajout nouvel circuit réussi');
                    showMessage();
                    $('.modal').modal('hide');
                }
            }
        }
    }
    let formdata = new FormData(form);
    xhr.send(formdata);
}