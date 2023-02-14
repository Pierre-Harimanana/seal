<?php
    if (!isset($_SESSION['admin'])) {
        //header('Location: login.php');
    }
    include 'include/connection.php';
    $sql = $bdd->query('select * from utilisateur');
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
            <h1>Controller</h1>

            <div class="right">
                <input class="inputHeader" type="text" placeholder="you can search here">
                <button class="inputHeader" id="logout">Logout</button>
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
                        <th>action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
                        while($data=$sql->fetch()){
                    ?>
                    <tr data-id=<?=$data['id'];?>>
                        <td><?=$data['id'];?></td>
                        <td><?=$data['username'];?></td>
                        <td><?=$data['validate'];?></td>
                        <td>
                            <?php
                                if($data['validate'] == 'valide'){
                            ?>
                                <button type="button" data-toggle="tooltip" title="set off <?=$data['username']?>!" id="desactiver" class="btn btn-danger btn-xs">deactivate</button>
                            <?php
                                }else{
                            ?>
                                <button type="button" data-toggle="tooltip" title="set on <?=$data['username']?>!"  id="activer" class="btn btn-success btn-xs">activate</button>
                            <?php
                                }
                            ?>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>

                    </tbody>
                </table>
            </div>
        </div>

        <footer>
            <p>Copyright 2023</p>
        </footer>

        <script src="bootstrap/js/bootstrap.js"></script>

    </body>
</html>

<script>
    $('#desactiver').click(function(){
        console.log("desactivation");
    });

    $('#activer').click(function(){
        console.log("activation");
    });

    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });

</script>

<button type="button" data-toggle="modal" data-target="#myModal">Modal</button>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure to activate this account??</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning">Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>
<!-- Fin Modal -->