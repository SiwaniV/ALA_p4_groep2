<?php
    $_SESSION = array();
    session_destroy();
    header('Location: index.php'); // terug naar de index
    exit();
?>