<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Les arbres remarquables</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/carte.css'>
</head>
    <body>
        <form>
            <input type="checkbox" class="checkbox" value="tous" id="val1" checked/> 
            <label for="val1"> Tous </label>
            <input type="checkbox" class="checkbox" value="X Hispanica" id="val2"/> 
            <label for="val2">X Hispanica </label>
            <input type="checkbox" class="checkbox" value="Sylvatica" id="val3"/> 
            <label for="val2">Sylvatica </label>
            <input type="checkbox" class="checkbox" value="azedarach" id="val4"/> 
            <label for="val2">azedarach </label>
        </form>
        <div class="logo">
            <a href="home.php"><img src="img/logo.png"></a>
        </div>
    <div class="container">
        <div class="arbres">
            <div class="arbre" id="arbre1">
                <img class="phtarbre" src="img/arbre.png">
                <div class="text" id="prems">
                        <p class="name">Hêtre</p>
                        <p class="especes">Sylvatica</p>
                        <p class="lieu">16ème arrondissement</p>
                        <p class="taille">320 cm</p>
                </div>
            </div>
            <div class="arbre" id="arbre2">
                <img class="phtarbre" src="img/arbre.png">
                <div class="text" id="prems">
                        <p class="name">Chêne</p>
                        <p class="especes">X Hispanica</p>
                        <p class="lieu">16ème arrondissement</p>
                        <p class="taille">443 cm</p>
                </div>
            </div>
            <div class="arbre" id="arbre3">
                <img class="phtarbre" src="img/arbre.png">
                <div class="text" id="prems">
                        <p class="name">Hêtre</p>
                        <p class="especes">Sylvatica</p>
                        <p class="lieu">7ème arrondissement</p>
                        <p class="taille">205 cm</p>
                </div>
            </div>
            <div class="arbre" id="arbre4">
                <img class="phtarbre" src="img/arbre.png">
                <div class="text" id="prems">
                        <p class="name">Lilas de Perse</p>
                        <p class="especes">azedarach</p>
                        <p class="lieu">8ème arrondissement</p>
                        <p class="taille">168 cm</p>
                </div>
            </div>
    </div>
        <script src='js/main.js'></script>
    </body>
</html>