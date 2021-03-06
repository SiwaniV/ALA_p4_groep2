<?php
    session_start();
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="language" content="NL">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Tim Slaghekke">
    <meta name="keywords" content="">
    <title>Presentatie</title>
    <link rel="stylesheet" type="text/css" href="CSS/Home Page.css">

    <link rel="stylesheet" href="reveal.js-master/dist/reveal.css">
    <link rel="stylesheet" href="reveal.js-master/dist/theme/black.css">
    <link rel="stylesheet" href="css/presentatie.css">
</head>

<body>

    <header id="desktop">

        <article id="logo">
            <a href="#"><img src="Images/Logo_desktop.png"></a>
        </article>

        <article id="menu-logo">
            <input type="checkbox" id="ham-checkbox">
            <label id="ham-logo" for="ham-checkbox">☰</label>
            <nav id="knop-1">
                <ul id="menu-2">
                    <li><a href="#">Presentatie</a></li>
                    <li><a href="#">Eenvoudig rekenen</a></li>
                    <li><a href="#">Fibonacci/priemgetallen</a></li>
                    <li><a href="#">Pittig rekenen</a></li>
                    <li><a href="#">Dobbelstenen</a></li>
                    <li><a href="#">Spel</a></li>
                </ul>
            </nav>
        </article>

        <article id="log">
            <p><a href="#">Inloggen</a></li><br></p>
            <p><a href="#">Aanmelden</a></li>
            </p>
        </article>
    </header>
    
    <main>

        <div class="reveal">
            <div class="slides">
                <section>
                    <h1>Uitleg</h1>
                    <p>Druk op het pijltje om naar de volgende slide te gaan!</p>
                </section>
                <section><h3>envoudige rekenpagina</h3><p>Eenvoudig rekenen is niets anders dan het eenvoudige of basisconcept dat verband houdt met wiskunde.
                    Over het algemeen worden tellen, optellen, aftrekken, vermenigvuldigen en delen de elementaire wiskundige bewerking genoemd.
                    Het andere wiskundige concept is bovenop de bovenstaande 4 bewerkingen gebouwd.</p>
                </section>
                <section>
                    <H3>Fibonacci</H3>
                    <section>
                        <p>De Fibonacci-reeks is een reeks getallen waarbij een getal de optelling is van de laatste
                            twee
                            getallen, beginnend met 0 en 1.</p>
                        <p>The Fibonacci Sequence: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233 377, 610</p>
                    </section>
                    <section>
                        <p>Na 0 en 1 is elk cijfer in deze getallenreeks de optelsom van de twee voorgaande nummers in
                            deze
                            opeenvolging</p>
                        <ul>
                            <li>0 + 1 = 1</li>
                            <li>1 + 1 = 2</li>
                            <li>1 + 2 = 3</li>
                            <li>2 + 3 = 5</li>
                            <li>3 + 5 = 8 etc.</li>
                        </ul>
                    </section>
                    <section>
                        <p> Als u deze logica zou toepassen op de grotere getallen in de Fibonacci trading reeks zal het u
                            opvallen dat er geen begrenzing aan de continuïteit van de reeks is en dezelfde formule en
                            aldus
                            dezelfde verhoudingen gelden:</p>
                        <ul>
                            <li>89 + 144 = 233,</li>
                            <li>144 + 233 = 377, etc</li>
                        </ul>
                    </section>
                    <section>
                        <p>Op vergelijkbare wijze kunnen we de logica achter de overige Fibonacci retracement levels
                            terug
                            brengen naar de verhoudingen tussen de getallen in de reeks. De relatie tussen twee
                            alternerende
                            cijfers (wanneer u een plaats overslaat, bijvoorbeeld 377/144 =) blijkt 1.382.</p>
                    </section>
                </section>
                
                <section><h1>Moeilijk rekenen</h1><p>Voeg een binaer getal in om een hexidecimaal getal te krijgen</p>

                </section>

                </section>
                <section>
                    <h3>Dobbelstenen</h3>
                    <p>Een dobbelsteen (ook wel: teerling) is in de gebruikelijke uitvoering een kubusvormig voorwerp
                        met op elk van de zijden een van de ogenaantallen 1 tot en met 6.
                    </p></section><section>
                    <p>Het woord dobbelsteen verwijst naar het oude spel dobbelen. Door werpen van de dobbelsteen zal
                        een van de zijden min of meer toevallig boven komen. Het aantal ogen op deze zijde wordt als
                        uitkomst van de worp beschouwd. De dobbelsteen fungeert daarmee als toevalsgenerator die, als de
                        dobbelsteen zuiver is, met gelijke kansen van 1⁄6 de getallen 1 t/m 6 voortbrengt. </p>
                    </section>
                </section>
            </div>
        </div>

        <script src="reveal.js-master/dist/reveal.js"></script>
        <script src="reveal.js-master/plugin/notes/notes.js"></script>
        <script src="reveal.js-master/plugin/markdown/markdown.js"></script>
        <script src="reveal.js-master/plugin/highlight/highlight.js"></script>
        <script>
            // More info about initialization & config:
            // - https://revealjs.com/initialization/
            // - https://revealjs.com/config/
            Reveal.initialize({
                hash: true,
                embedded: false,

                // Learn about plugins: https://revealjs.com/plugins/
                plugins: [RevealMarkdown, RevealHighlight, RevealNotes]
            });
        </script>

    </main>

    <footer>
        <article>
            <p>©Algebra Smart</p>
        </article>
    </footer>




</body>

</html>