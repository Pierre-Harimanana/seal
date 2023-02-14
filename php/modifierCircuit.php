<?php
    include_once 'connection.php';

    $customer= htmlspecialchars($_POST['client']);
    $circuit= htmlspecialchars($_POST['circuit']);
    $id= htmlspecialchars($_POST['id']);

    if(!empty($customer)){
        if(!empty($circuit)){
            $update= $bdd->prepare('update circuit set nom_client=? , circuit= ? where id=?');
            $update->execute(array($customer , $circuit , $id));
            echo 'succes';
        }else{
            echo 'champ circuit vide!';
        }   
    }else{
        echo 'champ client vide';
    }
?>