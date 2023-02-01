<?php

    $bdd= new PDO('mysql:host=localhost; dbname=seal', 'root', '');

    if (!$bdd) {
        die('error connected');
    }

?>