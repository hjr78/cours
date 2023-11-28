<?php 
session_start();
$server = "localhost";
$db_name = "canapy";
$user = "root";
$pwd = "";

try {
    
    $db = new PDO("mysql:host=$server;dbname=$db_name", $user, $pwd);

} catch (PDOException $e) {
     
    $error_msg = "<p style='color:red;'> ".$e->getMessage()." </p>";
    
    if( $_SERVER['HTTP_HOST'] == "localhost"){
        echo $error_msg;
    }

}

?>