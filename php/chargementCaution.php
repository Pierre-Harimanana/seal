<?php

    include_once "connection.php";

    $res= $bdd->query('select * from caution order by id');

    $output='';

    while ($data= $res->fetch()) {
        $output.=' 
            <tr id='.$data["id"].'>
                <td data-target="nom_client">'.$data['nom_client'].'</td>
                <td data-target="maersk">'.$data['maersk'].'</td>
                <td data-target="msc">'.$data['msc'].'</td>
                <td data-target="cmacgm">'.$data['cmacgm'].'</td>
                
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