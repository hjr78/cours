<?php

$sqlSelectCategory = "SELECT * FROM category";
$tableSelectCategory = mysqli_query($db_connect, $sqlSelectCategory);
$category = mysqli_fetch_all($tableSelectCategory, MYSQLI_ASSOC);

// print_r($category);


?>