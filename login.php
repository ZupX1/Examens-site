<title>Connexion</title>

<?php 
$error = "";
$success = "";
session_start();
if(isset($_SESSION['username']))
{
    if($_SESSION['username'] === "admin")
    {
        header("Location: admin.php"); 
    }
}

if(isset($_POST['submit'])){
    $username = strtolower($_POST['username']);
    $password = $_POST['password'];
    if($username === "admin" && $password === "admin")
    {
        $error = "";
        $_SESSION["username"] = $username;
        header("Location: admin.php");
    }
    else
    {
        $error = "Nom d'utilisateur ou mot de passe incorrect !";
    }
}


?>

<link rel="stylesheet" href="main.css">
<body id="log">
<nav class="ong">
      <img src="img/Logod.png" class="logo" alt="" />
      <div class="onglets">
        <a href="index.html">Accueil</a>
        <a href="cv.html">CV</a>
        <a href="portfolio.html">Portfolio</a>
        <a href="contact.html">Contact</a>
        <a href="login.php">Se connecter</a>
      </div>
    </nav>
    <form action="" method="POST">
        <div class="login1">
            <h1>Connexion</h1>
            <div class="logtxt">
                <input type="text" placeholder="Nom d'utilisateur" name="username" value="" autocomplete="off">
            </div>
  
            <div class="logtxt">
                <input type="password" placeholder="Mot de passe" name="password" value="" autocomplete="off">
            </div>
  
            <input class="button1" type="submit" name="submit" value="Se connecter">
            <p class="errormsg"><?php echo $error?></p>
        </div>
    </form>
</body>

<footer>
      <div class="reseaux">
        <div class="logore"><a href="https://discord.com/users/221371104046874625" target="_blank"><img src="img/discord.png" class="ds"  alt="logo discord"></img></a></div>
        <div class="logore"><a href="https://www.instagram.com/virgil.prvst/" target="_blank"><img src="img/insta.png" alt="logo insta"></img></a></div>
        <div class="logore"><a href="https://www.linkedin.com/in/virgil-pr%C3%A9vost-carpentier/" target="_blank"><img src="img/linkedin.png" alt="logo linkedin"></a></img></div>
        <div class="logore"><a href="https://github.com/ZupX1" target="_blank"><img src="img/git.png" alt="logo github"></img></a></div>
      </div>
    </footer>