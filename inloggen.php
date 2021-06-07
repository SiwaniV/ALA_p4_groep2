<?php
$error = "";

//checken of er op de submit geklikt

  if (isset($_POST['submit'])) {
     //checken of username en password ingevuld zijn
      if (!empty($_POST['inlogcode']) && !empty($_POST['wachtwoord'])) {

          require("database_algebraSmart.php");

          $inlogcode = trim($_POST['inlogcode']);
          $wachtwoord = trim($_POST['wachtwoord']);


         $sql = "SELECT * FROM gebruikers WHERE inlogcode = '". $inlogcode ."'";

         if($result = $conn->query($sql)) {

            $dbuser = $result->fetch_row();
            $dbpass = $dbuser[2];

            if (password_verify($pass, $dbpass)) {
                session_start();
                $_SESSION['ingelogd'] = true;
                $_SESSION['inlogcode'] = $inlogcode;
               header("");
          } else {
              $error = "Niet de juiste gegevens ingevuld <br>";
          }
        }
    } else {
        $error = "Inlogcode en wachtwoord is verplicht <br>";
    }
}
   
?>

<!doctype html>
<html>

<head>
    <script type="text/javascript" src="JS/eenvoud.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="language" content="NL">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Siwani Veerakathy">
    <meta name="keywords" content="">
    <script src="https://kit.fontawesome.com/344cdc7a03.js" crossorigin="anonymous"></script>
    <title>Inloggen</title>
    <link rel="stylesheet" type="text/css" href="CSS/inlog.css">
</head>

<body>

    <header id="desktop">
        <article id="logo">
                <a id="desktop-logo" href="Home Page.html"><img src="Images/Logo_desktop.png"></a>
        </article>
        <article id="menu-logo">
            <input type="checkbox" id="ham-checkbox">
            <label id="ham-logo" for="ham-checkbox">☰</label>
            <nav id="knop-1">
                <ul id="menu-2">
                    <li><a href="#">Presentatie</a></li>
                    <li><a href="eenvoudigrekenen.html">Eenvoudig rekenen</a></li>
                    <li><a href="#">Fibonacci/priemgetallen</a></li>
                    <li><a href="#">Pittig rekenen</a></li>
                    <li><a href="#">Dobbelstenen</a></li>
                    <li><a href="#">Spel</a></li>
                </ul>
            </nav>
        
        </article>

        <article id="log">
            <p><a href="#">Inloggen</a></li><br></p>
            <p><a href="#">Aanmelden</a></li></p>
        </article>
    </header>

    <main>
    
        <section id="formulier">
            <form method="post" action="">
            <?php echo $error;?>
            <h1>Inloggen</h1>
                <div>
                    <i class="fas fa-user-alt user-icon"></i>
                    <input type="text" naam="inlogcode" placeholder="Inlogcode" title="Typ je inlogcode in" required>
                </div> <br><br>
                <div>
                    <i class="fas fa-lock lock-icon"></i>
                    <input type="pas" naam="wachtwoord" placeholder="Wachtwoord" title="Typ je wachtwoord in" required>
                </div>
                <button id="log_in_btn" type="submit" name="submit" value="inloggen">Inloggen</button>
                <a id="link-aanmeld" href="#"><p>Creër een account</p></a>
        </section>


    </main>


    <footer>
        <article><p>©Algebra Smart</p></article>
    </footer>


</body>

</html>
