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
                    <a href="#" data-role="update" data-id='.$data['id'].'>
                        <button class="boutonModifier">modifier</button> 
                    </a>
                    <a href="php/supprimer.php?delete='.$data['id'].'&table=caution">
                        <button class="boutonSupprimer">supprimer</button> 
                    </a> 
                </td>
            </tr>
        ';
    }
 
    echo $output;
?>