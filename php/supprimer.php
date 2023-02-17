<?php
    include_once 'connection.php';
    
    if (isset($_POST['delete']) && isset($_POST['nomtable'])) {
        $id= $_POST['delete'];
        $table= $_POST['nomtable'];

        $delete= $bdd->prepare('delete from '.$table.' where id = ?');
        $delete->execute(array($id));

        if($delete){
            header('Location: ../'.$table.'.php');
        }
    }
?>