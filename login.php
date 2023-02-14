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
                Username
                <input type="text" name="username" placeholder="votre nom" autocomplete="off">
                Password
                <i class="eyes">show</i>      
                <input type="password" name="motdepass" placeholder="votre mot de pass" autocomplete="off">  
                <button type="submit" class="btnlogin">Login</button>
            </form>
            
            <div class="footerModal">
                <span>Pas encore inscrit? <a href="signup.php">S'inscrire</a> </span>
            </div>
        </div>
    </div>
<!-- login form -->

<?php
    include 'partials/footer.php';
?>

<!-- success message -->
<div id="snackbar"></div>
<!-- fin success message -->

<script src="js/apps.js"></script>
<script src="js/login.js"></script>