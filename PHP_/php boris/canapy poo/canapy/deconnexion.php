<?php

require_once("lib/db.php");

require_once("lib/user.php");

$logOut=new User($db);

$logOut->deconnexion();

?>