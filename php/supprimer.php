<?php
    include_once 'connection.php';
    
    if (isset($_GET['delete']) && isset($_GET['table'])) {
        $id= $_GET['delete'];
        $table= $_GET['table'];

        $delete= $bdd->prepare('delete from '.$table.' where id = ?');
        $delete->execute(array($id));

        if($delete){
            header('Location: ../'.$table.'.php');
        }
    }
?>