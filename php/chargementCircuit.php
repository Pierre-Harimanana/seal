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
                    <a href="#" data-role="update" data-id='.$data['id'].'>
                        <button class="boutonModifier">modifier</button> 
                    </a>
                    <a href="php/supprimer.php?delete='.$data['id'].'&table=circuit">
                        <button class="boutonSupprimer" id="supprimer">supprimer</button> 
                    </a> 
                </td>
            </tr>
        ';
    }
 
    echo $output;
?>