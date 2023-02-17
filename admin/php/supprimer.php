<?php
    include '../include/connection.php';

    $id = htmlspecialchars($_POST['id']);    
    
    $sql= $bdd->prepare('DELETE FROM utilisateur WHERE id=?');
    $sql->execute(array($id));
    
    echo 'success';
?>