<?php
    $res='';

    include '../include/connection.php';
    $sql = $bdd->query('select * from utilisateur');

    $numero=0;

    while($data=$sql->fetch()){
        $numero+=1;

        $res.= '
        <tr id="'.$data['id'].'">
            <td>'.$numero.'</td>
            <td>'.$data['username'].'</td>
            <td>'.$data['validate'].'</td>
            <td>'.$data['date_inscription'].'</td>
            <td>'; if($data['validate']=="valide"){
                
            }
            
            '</td>
            <td>
        ';
                if($data['validate'] == 'valide'){
                    $res.= '
                        
                        <a class="btn btn-warning btn-xs" data-role="desactiver" data-id='.$data['id'].' data-toggle="modal" data-target="#myModal">
                            <span class="glyphicon glyphicon-remove"></span>
                            deactivate
                        </a>';
                    }else{
                    $res.= '
                        <a class="btn btn-success btn-xs" data-role="activer" data-id='.$data['id'].' data-toggle="modal" data-target="#myModal">
                            <span class="glyphicon glyphicon-off"></span>
                            activate
                        </a>';
                    }
        $res.='
            </td>
            <td>
                <a class="deleteBouton" data-role="delete" data-id='.$data['id'].' data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-trash"></span>
                    delete
                </a>
            </td>
        </tr>
            ';
        }

        echo $res;
?>