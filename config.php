<?php
$host = "localhost";
$dbname = "inscription_au_cours";
$username = "root";
$password = "";

function openDb() {
    global $host, $dbname, $username, $password;

    $conn = new mysqli($host, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Échec de la connexion : " . $conn->connect_error);
    }

    return $conn;
}
