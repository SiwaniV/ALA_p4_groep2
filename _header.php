<header id="desktop">
    <article id="logo">
            <a id="desktop-logo" href="index.php"><img src="Images/Logo_desktop.png"></a>
    </article>
    <article id="menu-logo">
        <input type="checkbox" id="ham-checkbox">
        <label id="ham-logo" for="ham-checkbox">☰</label>
        <nav id="knop-1">
            <ul id="menu-2">
                <li><a href="#">Presentatie</a></li>
                <li><a href="eenvoudigrekenen.php">Eenvoudig rekenen</a></li>
                <li><a href="#">Fibonacci/priemgetallen</a></li>
                <li><a href="#">Pittig rekenen</a></li>
                <li><a href="#">Dobbelstenen</a></li>
                <li><a href="#">Spel</a></li>
            </ul>
        </nav>
    
    </article>

    <article id="log">
        <?php if(isset($_SESSION['ingelogd']) && $_SESSION['ingelogd'] == true) { ?>
            <p>Hallo <?php echo $_SESSION['inlogcode']; ?></p>
        <?php }else { ?>
            <p><a href="#">Inloggen</a></li><br></p>
            <p><a href="#">Aanmelden</a></li></p>
        <?php } ?>
    </article>
</header>