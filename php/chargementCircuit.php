<?php

    include_once "connection.php";

    $res= $bdd->query('select * from circuit order by id');

    $output='';

    while ($data= $res->fetch()) {
        $output.=' 
            <tr id='.$data["id"].'>
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
 
    echo $output;
?>