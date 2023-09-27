<?php 

$idprd = $_GET['idproduct'];

$sqlSelectProduct =  "SELECT * FROM `product` WHERE `id_product` = $idprd";
$tableSelectProduct = mysqli_query($db_connect, $sqlSelectProduct);

$product = mysqli_fetch_all( $tableSelectProduct, MYSQLI_ASSOC);

print_r($product);


?>