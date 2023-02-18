<!DOCTYPE html>
<html>
    <head>
        <!-- bootstrap -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <!-- style -->
        <link rel="stylesheet" href="css/login.style.css">
        <title> E- research</title>
        <meta charset="utf-8">
        <script src="js/jquery.js"></script>
    </head>
    <body>
            
        <div class="jumbotron text-center bg-2">
            <h1>La ligne Scandinave</h1>
            <p>This page is reserved for administrator only, there you can manage the list of user, and set up some user account.</p>
        </div>

    <div class="container background-red">
        <h2 class="text-center">Login administrator</h2>
        <form class="form-horizontal">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <div class="alert alert-danger error-txt">
                        <strong>Warning!</strong>
                        <span class="error-message"></span>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-sm-2" for="input1">Username *</label>
                <div class="col-sm-10">
                    <input type="text" id="input1" class="form-control" name="username" placeholder="Enter email">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password *</label>
            <div class="col-sm-10">          
                <input type="password" id="pwd" class="form-control" name="motdepass" placeholder="Enter password">
            </div>
        </div>
        
        <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
            </div>
        </div>
        
        <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default btnlogin">Submit</button>
            </div>
        </div>
    </form>
    </div>

        <footer class="text-center">
            <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a><br><br>
            <p>Copyright &copy; 2023</p>
        </footer>
    </body>
</html>

    <script>
let boutonLogin= document.querySelector('.btnlogin');
let form= document.querySelector('form');

form.onsubmit=function(e){
    e.preventDefault();
}

boutonLogin.onclick=function() {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/login.php", true);
    xhr.onload=function() {
        if (xhr.readyState==XMLHttpRequest.DONE) {
            if (xhr.status==200) {
                let data = xhr.responseText;
                if (data=='succes') {
                    console.log(data);
                    document.location="index.php";
                }else {
                    console.log(data);
                    $('.error-txt').slideDown(300);
                    $('.error-message').text(data);
                }
            }
        }
    }
    let formdata = new FormData(form);
    xhr.send(formdata);
}
</script>