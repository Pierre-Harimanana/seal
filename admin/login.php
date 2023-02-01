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
                <button class="inputHeader">Logout</button>
            </div>
        </div>


        <div class="loginFenetre">
            <div class="loginContent">
                <div class="headLogin">
                    <h3>Login admin</h3>
                    <button class="fermer">Close</button>
                </div>

                <div class="error-txt">coucou</div>

                <form action="">
                    Username
                    <input type="text" placeholder="votre nom">        
                    Password
                    <input type="password" placeholder="votre mot de passe" autocomplete="off">        
                    <button class="btnlogin">Login</button>
                </form>

                <div class="footLogin">
                    not yet signed? signup
                </div>
            </div>
        </div>


        <footer>
            <p>Copyright 2023</p>
        </footer>

    </body>
</html>

<!-- success message -->
<div id="snackbar"></div>
<!-- fin success message -->
<script src="../js/apps.js"></script>