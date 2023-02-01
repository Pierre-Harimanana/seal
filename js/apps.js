// function qui cache et affiche le mot de pass tapé
var pass= document.querySelector('.loginContent form input[type="password"]');
$('.loginContent form .eyes').click(function() {
    $('.loginContent form .eyes').toggleClass('active');
    if (pass.type=='password') {
        pass.type='text';
    } else {
        pass.type='password';
    }    
});

// function d'affichage message
function showMessage() {
    var x = document.getElementById("snackbar")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
