<?php 

$host = "localhost";
$port = 3306;
$database = "belajar_php_database";
$username = "root";
$password = "";

try{
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "Sukses terkoneksi ke database" . PHP_EOL;

    //Menutup koneksi
    $connection = null;
}catch(PDOException $exception){
    echo "Error terkoneksi ke database" . $exception->getMessage() . PHP_EOL;
}

?>