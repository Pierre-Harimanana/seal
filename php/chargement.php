<?php

    include_once "connection.php";

    $res= $bdd->query('select * from expert order by id');

    $output='';

    while ($data= $res->fetch()) {
            $output.=' 
            <tr id="'.$data['id'].'">
                <td data-target="nom_client">'.$data['nom_client'].'</td>
                <td data-target="expert">'.$data['expert'].'</td>
                <td> 
                    <a href="#" data-role="update" data-id='.$data['id'].'>
                        <button class="boutonModifier">modifier</button> 
                    </a> 
            
                    <a href="php/supprimer.php?delete='.$data['id'].'&table=expert">
                        <button class="boutonSupprimer">supprimer</button>
                    </a> 
                </td>
            </tr>
            ';
    }
 
    echo $output;
?>