<?php 
    include_once "include/test_login.php";
    include_once "include/modal.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/index.style.css">
        <link rel="stylesheet" href="css/modal.style.css">
        <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
        <meta charset="utf-8">
        <script src="js/jquery.js"></script>
    </head>
    <body>

        <div class="header">
            <h1>La Ligne Scandinave</h1>

            <div class="right">
                <input class="inputHeader" type="text" placeholder="you can search here">
                <button class="inputHeader" id="logoutModal">Logout</button>
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
           
            <div class="boite marg">
                <div class="headerBoite">Caution</div>
                <div class="contentBoite ">
                    <p>Count <span>20</span> </p>
                    <p>Count <span>20</span> </p>
                    <p>Count <span>20</span> </p>
                </div>

                <div class="footerBoite">
                    <a href="caution.php"><button>Caution</button></a>
                </div>
            </div>

            <div class="boite">
                <div class="headerBoite">Circuit</div>
                
                <div class="contentBoite">
                    <p>Count <span>20</span> </p>
                    <p>Count <span>20</span> </p>
                    <p>Count <span>20</span> </p>
                </div>

                <div class="footerBoite">
                    <a href="circuit.php"><button>Circuit</button></a>
                </div>
            </div>            
        </div>

        <footer>
            <p>Copyright 2023</p>
        </footer>


    </body>
</html>

<script src="js/apps.js"></script>
