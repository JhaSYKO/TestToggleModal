<?php       
    $myVeille = "SELECT * FROM veilles";
    $sth = $bdd->prepare($myVeille);
    $sth->execute();
    $showVeille = $sth->fetchAll(PDO::FETCH_ASSOC);
    // debug($showVeille,1);

    
?>