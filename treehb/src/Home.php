<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Les arbres remarquables</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/home.css'>
</head>
<body>
<header>
    <div class="logo">
    <a href="index.php"><img src="img/logo.png"></a> <!-- pour revenir à la vérif d'âge index.php -->
    </div>
</header>
    <div class="pub1">
        <a href="home.php" onclick="window.open('popup.php');"><img src="img/doggy.jpg" class="stretch"> </a>
        <p class="txtpub1"><a href="home.php" onclick="window.open('popup.php');">Rencontré des arbre chaud cyprès de chez toi</p></a>
    </div>
    <div class="videomap">
        <a href="carte.php"><img src="img/carte_paris.png" class="videomap1"></a>
    </div>
    <div class="play">
        <a href="carte.php"><img src="img/play.png" class="play"></a>
    </div>
    <div class="pub2">
        <a href="home.php" onclick="window.open('popup.php');"><img src="img/peni.jpg"></a>
        <p class="txtpub2"><a href="home.php" onclick="window.open('popup.php');">Veut-tu agrandir la taile de ton tronc ?</a></p>
    </div>
    <div class="pub3">
        <a href="home.php" onclick="window.open('popup.php');"><img src="img/ban.jpg" class="stretch1"></a>
        <p class="txtpub3"><a href="home.php" onclick="window.open('popup.php');">Des arbre remarquable t'attendes près de !*|lOCALISATION|*!</a></p>
    </div>
    <p class="titrev">La carte des arbres remarquables de Paris (-18)</P>
    <div class="bg2" id="ancre">
            <div class="anec">
                <span class="cm">52 733 cm</span>
                    <p>C'est la circonférence cumulé de tous les troncs des arbres remarquables de Paris</p>
            </div>
        <div>
            <a href="home.php #ancre" onclick="window.open('charme.php');"><img src="img/tronc.png" class="tronc"></a>
                <p class="circ">La circonférence du <strong>plus gros tronc</strong><br/> de Paris est de 695cm</p>
        </div>
    </div>
    <div class="chart1">
        <canvas class="graph1" id="chart1" aria-label="chart" role="img"> </canvas>
    </div>
    <div class="hauteur">
        <span class="ht">Si on cumule la hauteur de tous les arbres remarquables de Paris, nous atteignons une hauteur de <span class="metre">4 384 M</span> ce qui correspond approximativement à une hauteur de <span class="gland">146 133 glands</span></span>
    </div>
    <div class="footer">

    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
<script src="js/graph.js"></script>
</body>
</html>