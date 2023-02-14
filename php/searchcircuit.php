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
                        <a href="#" data-role="update" data-id='.$data['id'].'>
                            <button class="boutonModifier">modifier</button> 
                        </a> 

                        <a href="php/supprimer.php?delete='.$data['id'].'&table=circuit">
                            <button class="boutonSupprimer">supprimer</button>
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