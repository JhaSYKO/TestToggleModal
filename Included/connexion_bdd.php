<?php
    //connexion vers base mysql
    $dbname = 'genusa';
    $username = 'root';
    $password = '';
    $error = false;
    
    //PDO
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=genusa; port=3306', $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }  catch (PDOException $e) {
        echo 'Échec lors de la connexion : ' . $e->getMessage();
    }
?>