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


  <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <!-- <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
            <form role="form">
                <div class="form-group">
                    <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                    <input type="text" class="form-control" id="usrname" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                    <input type="text" class="form-control" id="psw" placeholder="Enter password">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="" checked>Remember me</label>
                </div>
                <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
            </form>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
            <p>Not a member? <a href="#">Sign Up</a></p>
            <p>Forgot <a href="#">Password?</a></p>
        </div>
        </div>
    </div> -->


<?php
    include 'partials/footer.php';
?>

<!-- success message -->
<div id="snackbar"></div>
<!-- fin success message -->

<script src="js/apps.js"></script>
<script src="js/login.js"></script>