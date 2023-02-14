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

$('.success').click(function(){
    console.log('logout application');
    document.location="php/logout.php";
});

$('.confirm').click(function(){
    console.log('confirm delete');
});

$('.cancel').click(function(){
    $('.modalLogout').hide(100);
    $('.modalConfirmation').hide(100);
});

$('.closeLogin').click(function(){
    $('.modalLogout').hide(100);
});

$('#logoutModal').click(function() {
    $('.modalLogout').show(200);
});

$('#supprimer').click(function() {
    $('.modalConfirmation').show(200);
});
