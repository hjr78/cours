<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
    die("La connexion à échoué : " . $conn->connect_error);
}

?>