<?php
    include_once 'connection.php';

    $customer= htmlspecialchars($_POST['client']);
    $maersk= htmlspecialchars($_POST['maersk']);
    $msc= htmlspecialchars($_POST['msc']);
    $cmacgm= htmlspecialchars($_POST['cmacgm']);

    $id= htmlspecialchars($_POST['id']);

    if(!empty($customer)){
        if(!empty($maersk)){
            if(!empty($msc)){
                if(!empty($cmacgm)){
                    
                    $update= $bdd->prepare('update caution set nom_client=?,maersk=?,msc=?,cmacgm=? WHERE id=?');
                    $update->execute(array($customer, $maersk, $msc, $cmacgm, $id));
                    echo 'succes';
                }else{
                    echo 'champ cmacgm vide!';
                }   
                    
            }else{
                echo 'champ msc vide!';
            }   

        }else{
            echo 'champ maersk vide!';
        }   

    }else{
        echo 'champ client vide';
    }
?>