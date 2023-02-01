<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/login.style.css">
        <title> E- research</title>
        <meta charset="utf-8">
        <script src="js/jquery.js"></script>
    </head>
    <body>

        <div class="header">
            <h1>La Ligne Scandinave</h1>

            <div class="right">
                <input class="inputHeader" type="text" placeholder="you can search here">
                <button class="inputHeader">Chercher</button>
            </div>
        </div>

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
        <footer>
            <p>Copyright 2023</p>
        </footer>

    </body>
</html>

<!-- success message -->
<div id="snackbar"></div>
<!-- fin success message -->

<script src="js/apps.js"></script>
<script src="js/login.js"></script>