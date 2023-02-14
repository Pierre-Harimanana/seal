<?php
    include 'partials/header.php';
?>

<!-- login form -->
    <div class="loginFenetre">
        <div class="loginContent">
            <div class="headLogin">
                <span class="closeLogin">&times;</span>
                <img src="images/Contact-icon.png" alt="">                
            </div>

            <!-- champ d'erreur -->
            <div class="error-txt">erorooo</div>
            
            <form action="#">
                <label for="">Username</label>
                <input type="text" name="username" placeholder="tape user name" autocomplete="off"> 

                <label for="">Password</label>
                <input type="password" name="motdepass" placeholder="tape your password" autocomplete="off">
                
                <label for="">Confirm password</label>
                <i class="eyes">show</i>      
                <input type="password" name="confirmPass" placeholder="confirm password" autocomplete="off">  
                <button type="submit" class="btnlogin">Signup</button>
            </form>
            
            <div class="footerModal">
                <span>Already signed up? <a href="login.php">Login</a> </span>
            </div>
        </div>
    </div>
<!-- login form -->
<?php
    include 'partials/footer.php';
?>

<script>
let inscrire= document.querySelector('.btnlogin');
let form= document.querySelector('.loginContent form');

form.onsubmit=function(e){
    e.preventDefault();
}

inscrire.onclick=function() {
    xhr= new XMLHttpRequest();
    xhr.open("POST", "php/signupTraitement.php", true);
    xhr.onload=function(){
        if (xhr.readyState==XMLHttpRequest.DONE && xhr.status==200) {
            valiny= xhr.responseText;

            if (valiny=="succes") {
                $('.loginFenetre').slideUp();
                console.log("inscription reussie");
                showMessage();
                $('#snackbar').text('user signed up!'); 

                setTimeout(function(){ 
                    document.location='login.php';
                }, 1000);

            }else{
                $('.error-txt').slideDown(300);
                $('.error-txt').text(valiny);
                console.log('error : ' + valiny);
            }
        }
    }
    formdata= new FormData(form);
    xhr.send(formdata);
}
</script>


<!-- success message -->
<div id="snackbar"></div>
<!-- fin success message -->
<script src="js/apps.js"></script>