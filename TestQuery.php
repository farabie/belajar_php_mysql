<?php 

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();
//Karena dia PDOStatement yang dimana sifatnya iteratoraggreate maka 
//Bisa menggunakan for each
$sql = "SELECT * FROM customers";
$result = $connection->query($sql);
foreach ($result as $row) {
    $id = $row["id"];
    $name = $row["name"];
    $email = $row["email"];

    echo "Halo selamat datang untuk $id dengan nama $name pada email $email" .PHP_EOL;
    // var_dump($row);
}

//Penutup koneksi
$connection = null;

?>