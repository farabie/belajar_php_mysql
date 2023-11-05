<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "admin";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$statement = $connection->prepare($sql);
$statement->execute([$username, $password]);

/* 
fetch() digunakan untuk menarik satu data dari hasil query,
ketika kita memanggil function fetch() lagi, 
maka otomatis akan menarik data selanjutnya, jika panggil 
fetch() lagi, maka akan mengambil data ketiga, dan seterusnya
*/

if ($row = $statement->fetch()) {
    echo "Sukses Login: " . $row["username"] . PHP_EOL;
} else {
    echo "Gagal Login: " . PHP_EOL;
}

//Ini false karena sebelumnya kita suah fetch data pertama kalau tidak ada lagi maka dia akan false
var_dump($statement->fetch());

$connection = null;

?>