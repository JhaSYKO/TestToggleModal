<?php 

    include "included/connexion_bdd.php";
    include "included/function.php";
    
    require_once("included/requestOnce.php"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyVeille_Test</title>
    <link rel="stylesheet" href="R.Portofolio/styles.css" type="text/css">
</head>
<body>

    <div class="toggle" onclick="toggleMenu();"></div>

    <section class="banner" id="home">
        <div class="imgSidebar">
            <img src="R.Portofolio/bg.jpg">
        </div>

        <div class="contentBx">
            <h5 class="logoTxt">Mes Veilles</h5>
            <div>
                <h4><span>Bonsoir</span>, Je suis</h4>
                <h2>LENOIR Toariki</h2>
                <h4>Et Bienvenu sur mes veilles.</h4>
            </div>
            <ul class="sci">
                <li><a href="#"><img src="R.Portofolio/facebook.png"></a></li>
                <li><a href="#"><img src="R.Portofolio/twitter.png"></a></li>
                <li><a href="#"><img src="R.Portofolio/instagram.png"></a></li>
            </ul> 
        </div>
    </section>

    <section class="about" id="about">
        <div class="title white">
            <h2>A Propos</h2>
            <p>Ma Propre Application ou je peux Gérer mes Veilles</p>
        </div>
        <div class="content">
            <div class="textBx">
                <p>C'est ici que je vais pouvoir éditer mes veilles et, plus tard peut être, les éditer. Mais qui sais, peut être que je pourrais utiliser cette page pour faire plus que ca ... </p>
            </div>
            <div class="imgBx">
                <img src="R.Portofolio/bg1.jpg">
            </div>
        </div>
    </section>

    <section class="work" id="work">
        <div class="title">
            <h2>Dernières Veilles</h2>
            <p>C'est ici qu'on pourras observer l'ensemble de mes veilles.</p>
        </div>
        <div class="content">
            <?php for ($i=0; $i < sizeof($showVeille); $i++) { ?>
                    <div class="workBx" onclick="toggleContent(<?php echo $showVeille[$i]['id']; ?>)">
                        <div class="imgBx">
                            <img src="<?php echo $showVeille[$i]['URL']; ?>">
                        </div>
                        <div class="textBx">
                            <h3>Veille 01</h3>
                        </div>
                    </div>
                    <div id="popup<?php echo $showVeille[$i]['id']; ?>" class="displayIt mt-4">
                            <h2><?php echo utf8_encode($showVeille[$i]['sujet']); ?></h2>
                            <p><?php echo $showVeille[$i]['date']; ?></p>
                            <p><?php
                                $bla = $showVeille[$i]['synthese'];
                                $thisVeille = utf8_encode($bla);
                                echo $thisVeille;
                                ?></p>
                            <p class="card-text" style="overflow: hidden; max-height: 100px;"><?php echo utf8_encode($showVeille[$i]['comment']); ?></p>
                            <a href="<?php echo $showVeille[$i]['lien']; ?>" class="btn btn-primary">Source</a>
                            <button class="btn btn-success ml-4" href="#" onclick="toggleReset(<?php echo $showVeille[$i]['id']; ?>)">Close</button>
                        </div>
                    
                <?php
                }
            ?>
    </section>

    <div class="sidebar">
        <ul class="menu">
            <li><a href="#home" onclick="toggleMenu()">Home</a></li>
            <li><a href="#about" onclick="toggleMenu()">About</a></li>
            <li><a href="#work" onclick="toggleMenu()">Work</a></li>
        </ul>
    </div>

    <script src="./included/script.js"></script>
</body>
</html>