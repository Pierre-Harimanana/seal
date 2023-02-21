<?php
    session_start();
    if (!isset($_SESSION['admin'])) {
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/index.style.css">
        <!-- bootstrap -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <!-- fin bootstrap -->
        <title> E- research</title>
        <meta charset="utf-8">
        <script src="../js/jquery.js"></script>
    </head>
    <body>

        <div class="header">
            <h1>
                <span class="glyphicon glyphicon-check"></span>
                Controller
            </h1>

            <div class="right">
                <input class="inputHeader" id="search" type="text" placeholder="you can search here">
                <button data-toggle="tooltip" data-placement="bottom" title="logout <?=$_SESSION['admin']?>!" class="inputHeader" id="logout">
                    <span class="glyphicon glyphicon-log-out"></span>
                    Logout
                </button>
            </div>
        </div>

        <div class="container margin-top">
            <div class="table-responsive">          
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Usename</th>
                        <th>Status</th>
                        <th>Signed_at</th>
                        <th>action</th>
                        <th>Delete</th>
                    </tr>
                    </thead>

                    <tbody class="myTable">
                    </tbody>

                </table>
            </div>
        </div>
    
        <div class="right-bottom">
        </div>

        <script>
            setInterval('loadData()', 300);
            function loadData() {
                $('.right-bottom').load('php/counter.php');
            }
        </script>

        <footer>
            <p>Copyright &copy; 2023</p>
        </footer>

        <script src="bootstrap/js/bootstrap.js"></script>

    </body>
</html>

<script>
    const table= document.querySelector('.myTable');
    var x=setInterval(() => {
        var xhr= new XMLHttpRequest();

        xhr.open('GET', 'php/chargementUtilisateur.php', true);

        xhr.onload=function() {
            if (xhr.readyState==XMLHttpRequest.DONE) {
                if (xhr.status==200) {
                    let data = xhr.response;
                    table.innerHTML=data;
                }   
            }
        }
        xhr.send();
    }, 500);
</script>


<script>
    $(document).on('click', 'a[data-role="desactiver"]', function() {
        var id= $(this).data('id');
        $('.message-txt').text('Are you sure to deactivate this account??');
        $('.modal').modal('show');

        $('#confirm').click(function() {
            $.ajax({
            url : 'php/setupAccount.php',
            method: 'POST',
            data : { id: id , newState: 'invalide'},
            success: function(response){
                        $('#myModal').modal('hide');
                        console.log("desactiver");                          
                    }
            });
        });
    });

    $(document).on('click', 'a[data-role="activer"]', function() {
        var id= $(this).data('id');
        $('.message-txt').text('Are you sure to activate this account??');
        $('.modal').modal('show');

        $('#confirm').click(function() {
            $.ajax({
            url : 'php/setupAccount.php',
            method: 'POST',
            data : { id: id , newState: 'valide'},
            success: function(response){
                        $('#myModal').modal('hide');
                        console.log("activer");                          
                    }
            });
        });
    });

    $(document).on('click', 'a[data-role="delete"]', function() {
        var id= $(this).data('id');
        $('.message-txt').text('Are you sure to delete account??');
        $('.modal').modal('show');

        $('#confirm').click(function() {
            $.ajax({
            url : 'php/supprimer.php',
            method: 'POST',
            data : { id: id},
            success: function(response){
                        $('#myModal').modal('hide');
                        console.log("delete success");                          
                    }
            });
        });
    });

    $('#logout').click(function() {
        console.log('logout');
        $('.message-txt').text('do you want to quit application??');
        $('.modal').modal('show');
        $('#confirm').click(function() {
            document.location='php/logout.php';
        });
    });


    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });

</script>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Confirmation</h4>
            </div>
            <div class="modal-body">
                <p class="message-txt">Are you sure to activate this account??</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="confirm">
                    <span class="glyphicon glyphicon-ok-sign"></span>
                    Yes
                </button>
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    <span class="glyphicon glyphicon-remove-circle"></span>
                    No
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Fin Modal -->


<script>
    const table= document.querySelector('.tableau');
    searchBar= document.querySelector('#search');

    searchBar.onkeyup=function() {
        let search= searchBar.value;

        if (search!=="") {
            searchBar.classList.add('active');
        }else{
            searchBar.classList.remove('active');
        }

        var xhr= new XMLHttpRequest();
        xhr.open('POST', 'php/searchExpert.php', true);
        xhr.onload=function() {
            if (xhr.readyState==XMLHttpRequest.DONE) {
                if (xhr.status==200) {
                    let data = xhr.response;
                    table.innerHTML=data;
                }   
            }
        }
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("searchTerm=" + search);
    }
</script>