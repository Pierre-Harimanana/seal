<?php 
    include_once "include/test_login.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/apps.style.css">

        <link rel="shortcut icon" href="images/Contact-icon.png" type="image/x-icon">
        <!-- bootstrap -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <meta charset="utf-8">
        <script src="js/jquery.js"></script>
    </head>
    <body>

        <div class="header">
            <h1>
                <a href="index.php">
                <span class="glyphicon glyphicon-export"></span>
                La Ligne Scandinave
                </a> 
            </h1>

            <div class="right">
                <input class="inputHeader" type="text" placeholder="you can search here">
                <button class="inputHeader" id="logoutModal">
                    <span class="glyphicon glyphicon-log-out"></span>
                    Logout
                </button>
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
                    <a href="expert.php">
                        <button class="toExpert">
                        <span class="glyphicon glyphicon-user"></span>
                        Expert
                        </button>
                </a>
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
                    <a href="caution.php">
                        <button>
                            <span class="glyphicon glyphicon-stats"></span>
                            Caution
                        </button>
                    </a>
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
                    <a href="circuit.php">
                        <button>
                        <span class="glyphicon glyphicon-road"></span>
                        Circuit
                        </button>
                    </a>
                </div>
            </div>            
        </div>

        <footer>
            <p>Copyright&copy; 2023</p>
        </footer>

        <?php
            include 'include/modal.php';
        ?>

    </body>
</html>

<script src="js/apps.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
