<?php
session_start();
if(!isset($_SESSION['ingelogd']) || $_SESSION['ingelogd'] != true) {
    header("Location: inloggen.php");
    exit();
}