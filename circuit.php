<?php include "include/test_login.php";?>

<html>
    <head>
        <link rel="stylesheet" href="css/apps.style.css">
        <link rel="shortcut icon" href="images/Contact-icon.png" type="image/x-icon">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

        <title> E- research</title>
        <meta charset="utf-8">
        <script src="js/jquery.js"></script>
    </head>
    <body>

        <div class="header">
                <h1>
                    <a href="index.php">
                        <span class="glyphicon glyphicon-export"></span>
                        La Ligne Scandinave > Circuit
                    </a> 
                </h1>

            <div class="right">
                <input id="search" class="inputHeader" type="text" placeholder="you can search here">
                <button class="inputHeader"  id="logoutModal">
                    <span class="glyphicon glyphicon-log-out"></span>
                    Logout</button>
            </div>
        </div>

        <div class="container margBottom">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Client</th>
                            <th>circuit</th>
                            <th>modifier</th>
                        </tr>
                    </thead>
                    <tbody class="contentTable">

                    </tbody>
                </table>
            </div>
        </div>

    
        <div class="ajouterExpert">
            <button data-toggle="modal" data-target="#myModal" class="btn btn-success btn-lg" >
                <span class="glyphicon glyphicon-plus"></span>
                Ajouter
            </button>
        </div>

        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="text-center">Ajouter nouvelle circuit</h4>
                    </div>
                    
                    <form action="#">            
                        <div class="modal-body">
                            <div class="alert alert-danger messageBox">
                                <strong>Danger!</strong> 
                                <span class="error-txt">
                                    Indicates a dangerous or potentially negative action.
                                </span>
                            </div>
                                <div class="form-group">
                                    <label for="client">Customer:</label>
                                    <input type="text" name="client" class="form-control" placeholder="enter customer name">
                                </div>  
                                <div class="form-group">
                                    <label for="txt2">Circuit:</label>
                                    <input type="text" name="circuit" class="form-control" placeholder="enter circuit">
                                </div>  
                        </div>
                            
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-success" id="ajouterCircuit">
                                    <span class="glyphicon glyphicon-plus"></span>
                                    ajouter
                                </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- End Modal -->

        <!-- Modal modification -->
        <div id="myModal2" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    
                    <div class="modal-body">
                        <div class="alert alert-danger messageBox">
                            <strong>Danger!</strong> 
                            <span class="error-txt">
                                Indicates a dangerous or potentially negative action.
                            </span>
                        </div>
                            <div class="form-group">
                                <label for="pwd">Client :</label>
                                <input type="text" id="clientModif" class="form-control">
                            </div>  
                            <div class="form-group">
                                <label for="pwd">Maersk :</label>
                                <input type="text" id="circuitModif" class="form-control">
                            </div>  
                    </div>
                        
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" id="saveCircuit">
                            <span class="glyphicon glyphicon-save"></span>
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal modification -->

        <!-- Modal confirmation -->
        <div class="modal fade" id="myModal3" role="dialog">
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
        <!-- Fin Modal confirmation -->

        <?php
            include 'include/modal.php';
        ?>


        <!-- success message -->
        <div id="snackbar"></div>
        <!-- fin success message -->

        <footer>
            <p>Copyright&copy; 2023</p>
        </footer>

    </body>
</html>

<script src="bootstrap/js/bootstrap.js"></script>
<script src="js/chargementCircuit.js"></script>
<script src="js/apps.js"></script>
<script src="js/circuit.js"></script>
<script src="js/modifCircuit.js"></script>

<script>
    $(document).on('click', 'a[data-role="supprimerCaution"]', function() {
        var id= $(this).data('id');
        $('.message-txt').text('Are you sure to delete row??');
        $('#myModal3').modal('show');
        $('#confirm').click(function() {
            $.ajax({
            url : 'php/supprimer.php',
            method: 'POST',
            data : { delete: id , nomtable: 'circuit'},
            success: function(response){
                        $('#myModal3').modal('hide');

                        showMessage();
                        $('#snackbar').text('suppression réussie!');
                        setTimeout(() => {
                            location.reload();
                        }, 600);
                    }
            });
        });
    });
</script>

<script>
    const table= document.querySelector('.contentTable');
    searchBar= document.querySelector('#search');

    searchBar.onkeyup=function() {
        mitady();
    }

    function mitady() {
        let search= searchBar.value;

        if (search!=="") {
            searchBar.classList.add('active');
        }else{
            searchBar.classList.remove('active');
        }

        var xhr= new XMLHttpRequest();
        xhr.open('POST', 'php/searchcircuit.php', true);
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