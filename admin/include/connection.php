<?php

    $bdd= new PDO('mysql:host=localhost; dbname=SEAL', 'pierre', 'BaseDeDonnées@2023');

    if (!$bdd) {
        die('error connected');
    }

?>