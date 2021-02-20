<?php
    //connexion vers base mysql
    // $dbname = 'myveille';
    // $username = 'root';
    // $password = '';
    // $error = false;
    
    //connexion vers base mysql
    $dbname = 'sql3394093';
    $username = 'sql3394093';
    $password = 'YdMK2qiKUr';
    $error = false;
    
    //PDO
    try{
        $bdd = new PDO('mysql:host=sql3.freemysqlhosting.net;dbname=sql3394093; port=3306', $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }  catch (PDOException $e) {
        echo 'Échec lors de la connexion : ' . $e->getMessage();
    }
?>