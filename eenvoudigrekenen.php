
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
    <script type="text/javascript" src="JS/eenvoud.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="language" content="NL">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Siwani Veerakathy">
    <meta name="keywords" content="">
    <title>Eenvoudige rekenpagina</title>
    <link rel="stylesheet" type="text/css" href="CSS/eenvoudrekenen.css">
</head>

<body>

<?php include('_header.php'); ?>

    <main>
        <section id="banner">
            <div id="laag">
                <article>
                    <h1>Wat is eenvoudig rekenen?</h1>
                    <p>Eenvoudig rekenen is niets anders dan het eenvoudige of basisconcept dat verband houdt met wiskunde. <br>Over het algemeen worden tellen,
                        optellen, aftrekken, vermenigvuldigen en delen de elementaire wiskundige bewerking genoemd.<br> Het andere wiskundige concept is
                        bovenop de bovenstaande 4 bewerkingen gebouwd.</p>
                        <a href="http://www.allesoverrekenen.nl/10x-handig-rekenen/" id="info" target="_blank">
                          Meer info...
                        </a>
                </article>
            </div>
        </section> 

        <section>
            <article id="item-ham">
                <details>
                    <summary>
                        <h1 id="icon">«</h1>
                    </summary>
                    <nav id="menu">
                        <ul>
                            <h1 id="kop">Hoofdstukken</h1>
                            <li><a href="#Tafels1">Tafels</a></li>
                            <li><a href="#Machten1">Machten</a></li>
                            <li><a href="#Breuken1">Breuken</a></li>
                            <li><a href="#Machten2">Machten 2</a></li>
                        </ul>
                    </nav>
                </details>
            </article>
        </section>


      
                        <!--TAFELREEKS-->
        <section class="blok">
            <article class="lamp">
                <img src="Images/lamp.png">
            </article>
            <span id="Tafels1"></span>
                <article class="uitleg">
                    <p>Als je een getal 'vermenigvuldigt' of 'maal' optelt, 
                        tel je het een aantal keer bij zichzelf op,<br> bijvoorbeeld 4 vermenigvuldigd
                        met 3 is hetzelfde als 4 + 4 + 4 = 12 zeggen.<br>
                        Met deze generator typ je een decimaal getal in
                        en krijg je een reeks met tafels van dat ingevulde<br>
                        getal via de ‘genereer’ knop terug.</p>
            </article>
        </section>
<!-- 
                   <section id="tafels">
            <h1>Tafels</h1>
            <form onsubmit="return genereerTafel();">
                <p>
                    <label>Vermenigvuldigtal:</label>
                    <input id="tafel-vermenigvuldigtal" value="5" type="number">
                </p>
                <p>
                    <label>Max vermenigvuldiger:</label>
                    <input id="tafel-max-vermenigvuldiger" value="10" type="number">
                </p>
                <p>
                    <button type="submit">Genereer tafel</button>
                </p>
                <p>
                    <textarea readonly id="tafel-antwoord"></textarea>
                </p>
            </form>
        </section> -->

        <section class="formule">
        <article>
                <h1>Tafels van...</h1><br><br>
                <form onsubmit="return genereerTafel()">
                    <p>
                        <input id="tafel-vermenigvuldigtal" value="5" type="number">
                    </p>
                    <p>
                        <input id="tafel-max-vermenigvuldiger" value="10" type="number">
                    </p>
                    <p>
                        <button id="tafel-knop" type="submit">Genereer</button>
                    </p>
                    <p>
                        <textarea readonly id="tafels"></textarea>
                    </p>
                </form>
                </article>
            </section>

                <!--TAFELREEKS EIND-->

                <!--MACHTENREEKS-->
        <section class="blok">
            <article class="lamp">
                <img src="Images/lamp.png">
            </article>
            <span id="Machten1"></span>
                <article class="uitleg">
                    <p>Machten worden gebruikt om berekeningen snel uit te voeren of
                        formules korter te schrijven.<br> Zo kan je de berekening 7 × 7 × 7 × 7 × 7
                        korter schrijven als 75.<br> In 75  wordt 7 het grondtal en 5 de
                        exponent genoemd. Dus: grondtalexponent
                        Met deze generator typ je een decimaal getal<br> die je grondgetal voorstelt
                        en krijg je reeks van machten waarin de exponent tot 15 loopt.
            </article>
        </section>

        <section class="formule">
            <article>
                <h1>De machtreeks van..</h1><br><br>
                <input type="number" id=macht1 name="macht" title="Type de grondgetal in" placeholder="5">
                <button id="btn-2" onclick="machtReeks()">Genereer</button><br> <br>
                <article id="machten"></article>
            </article>
        </section>
        <!--MACHTENREEKS EIND-->

        <section id="meaning">
            <article>
                <img src="Images_eenvoudigrekenen/1.png">
            </article>
            <article class="text">
                <p>In wiskunde betekent <strong>vermenigvuldigen</strong>
                    het optellen van gelijke groepen.<br>
                    Als we ons vermenigvuldigen, neemt
                    het aantal dingen in de groep toe. <br><br>
                    Een grootheid die de <strong>macht</strong> weergeeft waarnaar
                    een bepaald getal of een bepaalde<br>
                 uitdrukking moet worden verhoogd,
                 meestal uitgedrukt als een verhoogd<br>
                 symboolnaast het getal of de uitdrukking</p>
            </article>
        </section>


        <!--BREUKENREEKS-->
        <section class="blok">
            <article class="lamp">
                <img src="Images/lamp.png">
            </article>
            <span id="Breuken1"></span>
                <article class="uitleg">
                    <p>
                        Een breuk bestaat altijd uit een teller en een noemer. De teller is het getal<br>
boven de breukstreep en de noemer het getal onder de breukstreep.<br>
Voorbeeld: In 3/4 is 3 de teller en 4 de noemer.<br> Je kan een breuk in een <br><br>
decimaal getal (kommagetal) uitdrukken door de teller <br>te delen met de noemer.
Bijvoorbeeld: 3/4 = 0,75

Met deze generator typ je een decimaal getal in die je noemer voorstelt. Wanneer
je op de ‘genereer’ knop drukt krijg je een reeks van breuken die tot je 
ingevulde getal loopt.
                    </p>
            </article>
        </section>



        <section class="formule">
            <article>
                <h1>De breukenreeks van..</h1><br><br>
                <input type="number" id=breuk1 name="breuk" title="Type de noemer in" placeholder="3">
                <button onclick="breukenReeks()">Genereer</button><br> <br>
                <article id="breuken"></article>
            </article>
        </section>
<!--BREUKENREEKS EIND-->

        <!--MACHTENREEKS 2-->
        <section class="blok">
            <article class="lamp">
                <img src="Images/lamp.png">
            </article>
            <span id="Machten2"></span>
                <article class="uitleg">
                    <p>Voor de 2 mag je ook kwadraat zeggen.
                        Zo wordt 72 uitgesproken als 'zeven kwadraat' <br> of als 'zeven in het kwadraat'.
                        
                        Vergeleken met de vorige machtreeks generator heeft deze generator al een auto-
                        matische exponent voor je <br> en hoef je alleen een grondgetal in te vullen die het
                        maximum bepaalt van je machtreeks.
                    </p>
            </article>
        </section>


        <section class="formule">
            <article>
                <h1>De machtenreeks van..</h1><br><br>
                <input type="number" id=kwad1 name="kwad" title="Type de grondgetal in" placeholder="8">
                <button onclick="kwadraatReeks()">Genereer</button><br> <br>
                <article id="kwadraat"></article>
            </article>
        </section>
<!--MACHTENREEKS 2 EIND-->


<section id="meaning-2">
    <article>
        <img src="Images_eenvoudigrekenen/2.png">
    </article>
    <article class="text">
        <p><strong>Breuken</strong> vertegenwoordigen gelijke delen
            van een geheel of een verzameling. <br>Breuk van een geheel:
            wanneer we een geheel in gelijke
            delen verdelen, <br>is elk deel een fractie van het geheel.<br><br>
            Bijvoorbeeld Breuk van een verzameling:
            breuken vertegenwoordigen ook delen van een
            set of verzameling.</p>
    </article>
</section>


    </main>


    <footer>
        <article><p>©Algebra Smart</p></article>
    </footer>


</body>


</html>