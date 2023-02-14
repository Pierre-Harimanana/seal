<?php
    include_once 'connection.php';

    $customer= htmlspecialchars($_POST['client']);
    $circuit= htmlspecialchars($_POST['circuit']);

    if(!empty($customer)){
        if(!empty($circuit)){
            $insert= $bdd->prepare('insert into circuit (nom_client, circuit) values (?,?) ');
            $insert->execute(array($customer , $circuit));
            echo 'succes';
        }else{
            echo 'champ circuit vide!';
        }   
    }else{
        echo 'champ client vide';
    }
?>