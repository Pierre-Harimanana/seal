<?php 
    include "include/test_login.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/index.style.css">
        <title> E- research</title>
        <meta charset="utf-8">
        <script src="js/jquery.js"></script>
    </head>
    <body>

        <div class="header">
            <h1>La Ligne Scandinave</h1>

            <div class="right">
                <input class="inputHeader" type="text" placeholder="you can search here">
                <button class="inputHeader" id="logout">Logout</button>
            </div>
        </div>

        <div class="conteneur">
            <div class="boite">
                <div class="headerBoite">
                    Expert
                </div>
                
                <div class="contentBoite">
                    <p>Count <span>20</span> </p>
                    <p>Count <span>20</span> </p>
                    <p>Count <span>20</span> </p>
                </div>
                
                <div class="footerBoite">
                    <a href="expert.php"><button class="toExpert">Expert</button></a>
                </div>
            </div>
           
            <div class="boite">
                <div class="headerBoite">Caution</div>
                
                <div class="contentBoite">
                    <p>Count <span>20</span> </p>
                    <p>Count <span>20</span> </p>
                    <p>Count <span>20</span> </p>
                </div>

                <div class="footerBoite">
                    <a href="caution.php"><button>Caution</button></a>
                </div>
            </div>
        </div>

    <!-- bouton de connexion/deconnexion -->
        <?php
            if (isset($_SESSION['login'])) {
        ?>        
            <div class="loginLogout">
                <!-- Connected mr <?=$_SESSION['login'];?> -->
                <a href="php/logout.php">
                    <button class="deconnecter">Logout</button>
                </a> 
            </div>
        <?php    
            }
        ?>
    <!-- fin bouton de connexion/deconnexion -->

        <footer>
            <p>Copyright 2023</p>
        </footer>

    </body>
</html>

<script src="js/apps.js"></script>
<script>
    $('#logout').click(function() {
        document.location="php/logout.php";
        console.log("go out");
    });
</script>