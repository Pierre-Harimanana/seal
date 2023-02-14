<?php
    include_once 'connection.php';

    $customer= htmlspecialchars($_POST['client']);
    $expert= htmlspecialchars($_POST['expert']);

    if(!empty($customer)){
        if(!empty($expert)){
            $insert= $bdd->prepare('insert into expert (nom_client, expert) values (?,?) ');
            $insert->execute(array($customer , $expert));
            echo 'succes';
        }else{
            echo 'champ expert vide!';
        }   
    }else{
        echo 'champ client vide';
    }
?>