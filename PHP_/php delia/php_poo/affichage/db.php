<?php
// Paramètres de connexion à la base de données
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'oo_entreprise';

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}


?>