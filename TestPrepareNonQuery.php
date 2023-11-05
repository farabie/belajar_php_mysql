<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "ajinomoto";
$password = "rahasia";

$sql = "INSERT INTO admin(username, password) VALUES (:username, :password)";
$statement = $connection->prepare($sql);
//Jadi dengan menggunakan prepare itu lebih aman karena input parameter dari user sebenarnya
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
$statement->execute();


$connection = null;

?>