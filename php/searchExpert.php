<?php

    $retour='';
    include_once "connection.php";

    $cherche= htmlspecialchars($_POST['searchTerm']);
    $res= $bdd->query("select * from expert where nom_client like '%".$cherche."%' or expert like '%".$cherche."%'");
    $x= $res->rowCount();

    if ($x > 0) {
        while ($data= $res->fetch()) {
                $retour.=' 
                <tr id="'.$data['id'].'">
                <td data-target="nom_client">'.$data['nom_client'].'</td>
                <td data-target="expert">'.$data['expert'].'</td>
                <td>    
                    <a href="#" data-role="update" data-id='.$data['id'].'>
                        <button class="btn btn-success btn-xs">
                            <span class="glyphicon glyphicon-edit"></span>
                            modifier
                        </button> 
                    </a> 
            
                    <a href="php/supprimer.php?delete='.$data['id'].'&table=expert">
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