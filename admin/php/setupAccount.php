<?php
    include '../include/connection.php';

    $id = htmlspecialchars($_POST['id']);    
    $nouvelStatus = htmlspecialchars($_POST['newState']);
    
    $sql= $bdd->prepare('UPDATE utilisateur SET validate=? WHERE id=?');
    $sql->execute(array( $nouvelStatus , $id));
    
    echo 'success';

?>