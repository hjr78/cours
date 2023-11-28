<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myshop";

try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    if ($server == "localhost") {
        $error_msg = '<p class="txt-info">' . $e->getMessage() . '</p>;';
    }
}
