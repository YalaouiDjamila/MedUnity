<?php

$servername = getenv('servername');
$username = getenv('username');
$password = getenv('password');
$dbname = getenv('dbname');
$database = new mysqli($servername, $username, $password, $dbname);

if ($database->connect_error) {
    die("Échec de la connexion : " . $database->connect_error);
}
?>