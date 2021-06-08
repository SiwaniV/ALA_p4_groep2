<?php
session_start();
if(!isset($_SESSION['ingelogd']) || $_SESSION['ingelogd'] != true) {
    header("Location: inloggen.php");
    exit();
}
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="language" content="NL">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Siwani Veerakathy">
    <meta name="keywords" content="">
    <title>Eenvoudige rekenpagina</title>
    <link rel="stylesheet" type="text/css" href="CSS/Home Page.css">
</head>

<body>
    
    <header id="desktop">

        <article id="logo">
                <a href="#"><img src="Images/Logo_desktop.png"></a>
        </article>

        <article id="menu-logo">
            <details>
                <summary>
                    <h1 id="ham-logo">☰</h1>
                </summary>
            </details>
        </article>

        <article>
            <nav id="knop-1">
                <ul>
                    <li><a href="#">Presentatie</a></li>
                    <li><a href="eenvoudigrekenen.php">Eenvoudig rekenen</a></li>
                    <li><a href="#">Fibonacci / priemgetallen</a></li>
                    <li><a href="#">Pittig rekenen</a></li>
                    <li><a href="#">Dobbelstenen</a></li>
                    <li><a href="#">Spel</a></li>
                </ul>
            </nav>
        </article>

        <article>
            <nav id="knop-2">
                <ul>
                    <li><a href="inloggen.php">Inloggen</a></li>
                    <li><a href="#">Aanmelden</a></li>
                </ul>
            </nav>

        </article>
    </header>

    <main>

        <article id="tekstvlak1">
            <p>Welcom op de website Algebra Smart. Op deze website kun je uitleg 
                vinden over de onderwerpen zoals; priemgetallen, tafelreeksen, 
                breukreeksen op de ‘presentatiepagina’ staat, elk onderwerp 
                te vinden op deze website, uitgelegd. Mocht je van al dat 
                harde leren even een pauze willen nemen klik dan op 
                het  ‘Spel’ tabblad.
            </p>
        </article>

    

        <article id="tekstvlak2">
            <p>Wil je behalve de uitlegpagina  ook de rest verkennen maak  dan</p>
        </article> 









    </main>

    <footer>
        <article><p>©Algebra Smart</p></article>
    </footer>
   



</body>

</html>