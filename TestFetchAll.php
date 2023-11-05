<?php
require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();
$sql = "SELECT * FROM customers";
$statement = $connection->query($sql);

//Digunakan untuk menarik semua hasil querynya dan menjadikannya sebagai array
$customers = $statement->fetchAll();

var_dump($customers);

?>