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
    <script type="text/javascript" src="JS/pittig_rekenen.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="language" content="NL">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Noortje Steenbergen">
    <meta name="keywords" content="">
    <title>Pittige rekenpagina</title>
    <link rel="stylesheet" type="text/css" href="CSS/pittige_rekenpagina.css">
   
</head>

<body>

<?php include('_header.php'); ?>

    <main>
        <section id="banner">
            <div id="laag">
                <article>
                    <h1>Wat is binair en hexadecimaal?</h1>
                 <p>Binaire getallen kunnen alleen maar 1 of 0 zijn. Hexadecimale getallen kunnen 0-9 of A-F zijn <br> </p>
                        <a href="https://nl.wikipedia.org/wiki/Hexadecimaal" id="info" target="_blank">
                          Meer info...
                        </a>
                </article>
            </div>
        </section> 
 
        <section class="blok">
            <article class="lamp">
                <img src="Images/lamp.png">
            </article>
                <article class="uitleg">
            <p>Hexadecimaal betekent letterlijk zestientallig. Het is een talstelsel waarbij niet, zoals gebruikelijk, met tien cijfers wordt gewerkt, maar met zestien cijfers. De cijfers 0 t/m 9 worden daarom uitgebreid met 'A' (=10) t/m 'F' (=15), ook wel 'a' t/m 'f'. In deze context zijn dat dus ook cijfers, geen letters. In de computerwereld wordt de hexadecimale voorstelling van getallen veel gebruikt, omdat deze manier van representeren goed aansluit bij de binaire representatie in de computer.

            Het woord 'hexadecimaal' wordt vaak afgekort als hex, hoewel dit 'zes' betekent.<br> <br>
            Met deze generator vul je een binair getal in en je krijgt er een hexadecimaal getal uit</p>
            </article>
        </section>

        <section class="formule">
            <article>
                <h1>Binair en Hexadecimaal</h1><br><br>
                <div>
            <div ng-controller="ConvertController">
        <div>
            <input type="text" ng-model="input" ng-change="convert()" select-text />
        </div>
        <div class="result">{{result}}
            <select ng-model="base" ng-options="b.label for b in bases" ng-change="convert()"></select>
        </div>
    </div>
            </div>
            </article>
        </section>    

        <section class="blok">
                    <article class="lamp">
                    <img src="Images/lamp.png">
                    </article>
                        <article class="uitleg">
                    <p>Priemgetallen zijn alle natuurlijke getallen groter dan 1, die alleen door 1 en zichzelf deelbaar zijn. Het getal 2 is het kleinste priemgetal en de reeks gaat vervolgens zo verder:

                        3, 5, 7, 11, 13, 17, 19, 23, ...<br><br>
                        
                        Omdat elk natuurlijk getal een product van priemgetallen is, zijn priemgetallen de belangrijkste natuurlijke getallen (hoofdstelling van de elementaire getallentheorie). Daardoor vervullen priemgetallen op het gebied van getallen een vergelijkbare rol als scheikundige elementen op het gebied van verbindingen.
                    <br><br>
                    Met deze generator vul je een getal in en krijg je het ingevoerde getal ontbonden in priemfactoren eruit.</p>
                    </article>
        </section>


        <section class="formule">
            <article>
                <h1>Factorizer</h1><br><br>
                <form action="" method="post" id="prime">
                    <div>
                        <input type="text" id="number" name="number" placeholder="Number" />
                        <input id="button-priem" type="submit" value="Genereer" /><br><br>
                    </div>
                </form>
                <div id="output"></div>           
            </article>
        </section>
        

        <!--BANNER START-->

        <section id="meaning">
            <article class="text">
               <p>Priemgetallen hebben invloed uitgeoefend op veel kunstenaars en schrijvers. De Franse componist Olivier Messiaen gebruikte priemgetallen om zijn ametrische muziek via "natuurlijke fenomenen" te creëren. In werken zoals La Nativite du Seigneur (1935) en Quatre etudes de rythme (1949-50) maakte hij tegelijkertijd gebruik van motieven, waarvan de lengte werd gegeven door verschillende priemgetallen om zo onvoorspelbare ritmes te creëren: de priemgetallen 41, 43, 47 en 53 komen in een van zijn études voor. Volgens Messiaen werd deze manier van componeren "geïnspireerd door de bewegingen van de natuur, de bewegingen van vrije en ongelijke duur". <br><br>In zijn sciencefictionnovelle Contact, later omgewerkt tot de film met dezelfde naam, stelde de NASA-wetenschapper Carl Sagan voor dat priemgetallen gebruikt konden worden als een middel om met buitenaardse wezens te communiceren, een idee dat hij informeel in 1975 voor het eerst samen had ontwikkeld met de Amerikaanse astronoom Frank Drake.
                <br><br>Veel films weerspiegelen een populaire fascinatie voor de geheimen van de priemgetallen en de cryptografie: films zoals Cube, Sneakers, The Mirror Has Two Faces en A Beautiful Mind, waarvan de laatste gebaseerd is op de biografie door Sylvia Nasar van de wiskundige en Nobelprijswinnaar John Forbes Nash. Priemgetallen worden ook gebruikt als een metafoor voor eenzaamheid en isolement in de roman van Paolo Giordano De eenzaamheid van de priemgetallen, waarin priemgetallen worden afgeschilderd als de "buitenstaanders" onder de gehele getallen.</p>
            </article>
            <article>
                <img src="Images/school.jpg">
            </article>
        </section>
   
        <!--BANNER EIND-->
    </main>


    <footer>
        <article><p>©Algebra Smart</p></article>
    </footer>


</body>

</html>