<?php

$error = "";

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
    <title>Aanmelden</title>
    <link rel="stylesheet" type="text/css" href="CSS/inlog.css">
</head>

<body>

    <?php include('_header.php'); ?>

    <main>
    
        <section id="formulier">
            <form method="post" action="">
            <?php echo $error;?>
            <h1>Maak een account</h1>
                <div>
                    <i class="fas fa-user-alt user-icon"></i>
                    <input type="text" name="inlogcode" placeholder="Inlogcode" title="Typ je inlogcode in" required>
                </div> <br><br>
                <div>
                    <i class="fas fa-lock lock-icon"></i>
                    <input type="password" name="wachtwoord" placeholder="Wachtwoord" title="Typ je wachtwoord in" required>
                </div>
                <button id="log_in_btn" type="submit" name="submit" value="inloggen">Aanmelden</button>
        </section>


    </main>


    <footer>
        <article><p>©Algebra Smart</p></article>
    </footer>


</body>

</html>