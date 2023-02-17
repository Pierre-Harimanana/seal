<?php
    include '../include/connection.php';
    
    $lesActifs= $bdd->query("select count(*) as actif from utilisateur where validate='valide'");
    $res1= $lesActifs->fetch();
    $count_actif= $res1['actif'];

    $lesPassifs= $bdd->query("select count(*) as inactif from utilisateur where validate='invalide'");
    $res2= $lesPassifs->fetch();
    $count_passif= $res2['inactif'];
?>

<p>Active account :  
    <span class="badge"> <?=$count_actif;?> </span>
</p>
<p>Inactive account :  
    <span class="badge"><?=$count_passif;?></span>
</p>