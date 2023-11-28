<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myshop";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("La connexion a échoué : " . mysqli_connect_error());
}


?>