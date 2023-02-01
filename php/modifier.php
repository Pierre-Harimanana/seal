<?php
    include_once 'connection.php';

    $customer= htmlspecialchars($_POST['client']);
    $expert= htmlspecialchars($_POST['expert']);
    $id= htmlspecialchars($_POST['id']);

    if(!empty($customer)){
        if(!empty($expert)){
            $update= $bdd->prepare('update expert set nom_client=? , expert= ? where id=?');
            $update->execute(array($customer , $expert , $id));
            echo 'succes';
        }else{
            echo 'champ expert vide!';
        }   
    }else{
        echo 'champ client vide';
    }
?>