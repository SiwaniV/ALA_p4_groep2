<?php
session_start();
if($_SESSION['ingelogd'] != true) {
    header ("");
}

//stap 1 verbinden met database
$servername = "localhost";
$username = "root";
$password = "";
$database = "algebra_smart";
$conn = new mysqli($servername, $username, $password, $database);
//stap 2 als de verbinding mislukt toon error 
if ($conn->connect_error){
    die("Connectie gefaald: " .$conn->connect_error);
}
?>
