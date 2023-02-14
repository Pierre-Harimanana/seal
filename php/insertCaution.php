<?php
    include_once 'connection.php';

    $client= htmlspecialchars($_POST['client']);
    $mae= htmlspecialchars($_POST['maersk']);
    $msc= htmlspecialchars($_POST['msc']);
    $cma= htmlspecialchars($_POST['cmacgm']);

    $erreurs= '';

    if (isset($client) && !empty($client)) {
        if (isset($mae) && !empty($mae)) {
            if (isset($msc) && !empty($msc)) {
                if (isset($cma) && !empty($cma)) {

                    $insert= $bdd->prepare('insert into caution (nom_client,maersk,msc,cmacgm) values (?,?,?,?)');
                    $insert->execute(array($client, $mae, $msc, $cma));
                    echo 'reussi';

                }else {
                    $erreurs.= 'no cmacgm';
                }
            }else {
                $erreurs.= 'no msc';
            }
        }else {
            $erreurs.= 'no maersk';
        }   
    }else {
        $erreurs.=  'no client';
    }

    echo $erreurs;

?>