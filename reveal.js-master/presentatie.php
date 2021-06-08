<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<title>reveal.js</title>

	<link rel="stylesheet" href="dist/reset.css">
	<link rel="stylesheet" href="dist/reveal.css">
	<link rel="stylesheet" href="dist/theme/black.css">
	<link rel="stylesheet" href="css/presentatie.css">

	<!-- Theme used for syntax highlighted code -->
	<link rel="stylesheet" href="plugin/highlight/monokai.css">
</head>

<header id="desktop">
	<article id="logo">
			<a href="#"><img src="Logo_desktop.png"></a>
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
		<p><a href="#">Aanmelden</a></li></p>
	</article>
</header>

<body>
	<div class="reveal">
		<div class="slides">
			<section>
				<h1>Uitleg</h1>
				<p>Druk op het pijltje om naar de volgende slide te gaan!</p>
			</section>
			<section>Eenvoudige rekenpagina<p></p>
			</section>
			<section><H3>Fibonacci</H3>
				<section>
					<p>De Fibonacci-reeks is een reeks getallen waarbij een getal de optelling is van de laatste twee
						getallen, beginnend met 0 en 1.</p>
					<p>The Fibonacci Sequence: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233 377, 610</p>
				</section>
				<section>
					<p>Na 0 en 1 is elk cijfer in deze getallenreeks de optelsom van de twee voorgaande nummers in deze
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
					<p> U deze logica zou toepassen op de grotere getallen in de Fibonacci trading reeks zal het u
						opvallen dat er geen begrenzing aan de continuïteit van de reeks is en dezelfde formule en aldus
						dezelfde verhoudingen gelden:</p>
					<ul>
						<li>89 + 144 = 233,</li>
						<li>144 + 233 = 377, etc</li>
					</ul>
				</section>
				<section>
					<p>Op vergelijkbare wijze kunnen we de logica achter de overige Fibonacci retracement levels terug
						brengen naar de verhoudingen tussen de getallen in de reeks. De relatie tussen twee alternerende
						cijfers (wanneer u een plaats overslaat, bijvoorbeeld 377/144 =) blijkt 1.382.</p>
				</section>
			</section>

			<section>Moeilijk rekenen<p></p></section>
			
			</section>
			<section>Dobbelstenen<p></p>
			</section>
			<section>Spel<p>Door op de pijltjestoetsen te drukken kan je kubus laten bewegen.</p>
			</section>
		</div>
	</div>

	<script src="dist/reveal.js"></script>
	<script src="plugin/notes/notes.js"></script>
	<script src="plugin/markdown/markdown.js"></script>
	<script src="plugin/highlight/highlight.js"></script>
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
</body>

<footer>
	<article><p>©Algebra Smart</p></article>
</footer>

</html>