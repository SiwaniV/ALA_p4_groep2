<header id="desktop">
    <article id="logo">
            <a id="desktop-logo" href="index.php"><img src="Images/Logo_desktop.png"></a>
    </article>
    <article id="menu-logo">
        <input type="checkbox" id="ham-checkbox">
        <label id="ham-logo" for="ham-checkbox">☰</label>
        <nav id="knop-1">
            <ul id="menu-2">
                <li><a href="presentatie.php">Presentatie</a></li>
                <li><a href="eenvoudigrekenen.php">Eenvoudig rekenen</a></li>
                <li><a href="fibopriem.php">Fibonacci/priemgetallen</a></li>
                <li><a href="pittig rekenpagina.php">Pittig rekenen</a></li>
                <li><a href="#">Dobbelstenen</a></li>
                <li><a href="#">Spel</a></li>
            </ul>
        </nav>
    
    </article>

    <article id="log">
        <?php if(isset($_SESSION['ingelogd']) && $_SESSION['ingelogd'] == true) { ?>
            <p></p><a href="uitloggen.php" onclick="return confirm('Ben je zeker dat je je wilt afmelden?')">Uitloggen</a></p>
        <?php }else { ?>
            <p><a href="inloggen.php">Inloggen</a></p>
            <p><a href="aanmelden.php">Aanmelden</a></p>
        <?php } ?>
    </article>
</header>