let boutonLogin= document.querySelector('.btnlogin');
let form= document.querySelector('.loginContent form');
let erreurText= document.querySelector('.error-txt');

form.onsubmit=function(e){
    e.preventDefault();
}

boutonLogin.onclick=function() {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/login.php", true);
    xhr.onload=function() {
        if (xhr.readyState==XMLHttpRequest.DONE) {
            if (xhr.status==200) {
                let data = xhr.responseText;
                console.log(data);
                if (data=='succes') {
                    showMessage();
                    $('#snackbar').text('Welcome to e-recherche!');

                    setTimeout(function(){ 
                        document.location='index.php';
                    }, 1500);

                }else {
                    $('.error-txt').slideDown(300);
                    $('.error-txt').text(data);
                }
            }
        }
    }
    let formdata = new FormData(form);
    xhr.send(formdata);
}

