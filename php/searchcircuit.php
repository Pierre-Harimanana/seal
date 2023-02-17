<?php

    $retour='';
    include_once "connection.php";

    $cherche= htmlspecialchars($_POST['searchTerm']);
    $res= $bdd->query("select * from circuit where nom_client like '%".$cherche."%' or circuit like '%".$cherche."%'");
    $x= $res->rowCount();

    if ($x > 0) {
        while ($data= $res->fetch()) {
                $retour.=' 
                <tr id="'.$data['id'].'">
                    <td data-target="nom_client">'.$data['nom_client'].'</td>
                    <td data-target="circuit">'.$data['circuit'].'</td>
                    <td> 
                        <a data-role="update" data-id='.$data['id'].'>
                        <button class="btn btn-success btn-xs">
                            <span class="glyphicon glyphicon-edit"></span>
                            modifier
                        </button> 
                        </a> 
                        
                        <a data-role="supprimerCaution" data-id="'.$data['id'].'">
                            <button class="btn btn-danger btn-xs">
                                <span class="glyphicon glyphicon-trash"></span>
                                supprimer
                            </button>
                        </a> 
                    </td>
                </tr>
                ';
        }
    }else {
        $retour.= 'aucune ligne trouvée';
    }
    echo $retour;
?>