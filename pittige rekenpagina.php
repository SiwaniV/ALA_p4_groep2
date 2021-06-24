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
    <script type="text/javascript" src="JS/fipri.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="language" content="NL">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Noortje Steenbergen">
    <meta name="keywords" content="">
    <title>Pittige rekenpagina</title>
    <link rel="stylesheet" type="text/css" href="CSS/fib&priem.css">
</head>

<body>

<?php include('_header.php'); ?>

    <main>
        <section id="banner">
            <div id="laag">
                <article>
                    <h1>Wat is binair en hexadecimaal?</h1>
                 <p>De Fibonacci-reeks is een eigenaardige reeks getallen uit de klassieke wiskunde <br> die toepassingen heeft gevonden in geavanceerde wiskunde, natuur, statistiek, informatica en Agile Development.</p>
                        <a href="https://en.wikipedia.org/wiki/Fibonacci_number" id="info" target="_blank">
                          Meer info...
                        </a>
                </article>
            </div>
        </section> 

      
                        <!--Fibonacci start-->
        <section class="blok">
            <article class="lamp">
                <img src="Images/lamp.png">
            </article>
                <article class="uitleg">
            <p>Fibonacci is een reeks getallen die begint bij twee getallen: eerst 0 en vervolgens 1. Het volgende getal komt telkens voort uit de som van de voorgaande twee getallen.

                <br><br>  Na de eerste twee getallen komt dus weer een 1 (0 + 1 = 1)vervolgens komt een 2 (1 + 1), daarna een 3 ( 1+ 2). Het begin van de rij van Fibonacci ziet er als volgt uit:
                
                0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144..  <br> <br>
            Met deze generator vul je een getal in dat je maximum voorstelt en krijg je een reeks van getallen die volgens het Fibonacci formule berekend wordt</p>
            </article>
        </section>

        <section class="formule">
            <article>
                <h1>Rij van Fibonacci</h1><br><br>
                <input type="number" id=input_fib name="fibonacci-getal" title="Type element in" value="5">
                <button id="btn-1" onclick="Fibonacci_genereren()">Genereer</button><br><br>
                <article id="fibonacci-output"></article>
            </article>
        </section>

                <!--fibonacci eind-->


                <!--priemgetallen start-->

                <section class="blok">
                    <article class="lamp">
                    <img src="Images/lamp.png">
                    </article>
                        <article class="uitleg">
                    <p>Priemgetallen zijn alle natuurlijke getallen groter dan 1, die alleen door 1 en zichzelf deelbaar zijn. Het getal 2 is het kleinste priemgetal en de reeks gaat vervolgens zo verder:

                        3, 5, 7, 11, 13, 17, 19, 23, ...<br><br>
                        
                        Omdat elk natuurlijk getal een product van priemgetallen is, zijn priemgetallen de belangrijkste natuurlijke getallen (hoofdstelling van de elementaire getallentheorie). Daardoor vervullen priemgetallen op het gebied van getallen een vergelijkbare rol als scheikundige elementen op het gebied van verbindingen.
                    <br><br>
                    Met deze generator vul je een getal in dat je maximum voorstelt en krijg je een reeks van priemgetallen terug.</p>
                    </article>
                </section>


        <section class="formule">
            <article>
                <h1>Alle priemgetallen tot...</h1><br><br>
                <form action="" method="post" id="prime">
                    <div>
                        <input type="text" id="number" name="number" placeholder="Number" />
                        <input id="button-priem" type="submit" value="Genereer" /><br><br>
                    </div>
                </form>
                <div id="output"></div>
            </article>
        </section>
        <!--priemgetallen eind-->

        <!--BANNER START-->

        <section id="meaning">
            <article class="text">
               <p>De Fibonacci-reeks is uitgevonden door de Italiaan Leonardo Pisano Bigollo (1180-1250), die in de wiskundige geschiedenis bekend is onder verschillende namen: Leonardo van Pisa (Pisano betekent "van Pisa") en Fibonacci (wat "zoon van Bonacci" betekent).Fibonacci, de zoon van een Italiaanse zakenman uit de stad Pisa, groeide tijdens de middeleeuwen op in een handelskolonie in Noord-Afrika. <br><br> Italianen waren enkele van de meest bekwame handelaren en kooplieden van de westerse wereld tijdens de middeleeuwen, en ze hadden rekenkunde nodig om hun commerciële transacties bij te houden. Wiskundige berekeningen werden gemaakt met behulp van het Romeinse cijfersysteem (I, II, III, IV, V, VI, enz.), maar dat systeem maakte het moeilijk om optellen, aftrekken, <br>  vermenigvuldigen en delen uit te voeren die handelaren nodig hadden om bij te houden hun transacties.</p>
            </article>
            <article>
                <img src="Images_fibonacci_priemgetallen/Fibonacci_reeks.jpg">
            </article>
        </section>
   
        <!--BANNER EIND-->
    </main>


    <footer>
        <article><p>©Algebra Smart</p></article>
    </footer>


</body>

</html>