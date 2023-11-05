<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "Kumbang";
$password = "Kumbang123";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$statement = $connection->prepare($sql);
//Jadi dengan menggunakan prepare itu lebih aman karena input parameter dari user sebenarnya
// $statement->bindParam(1, $username);
// $statement->bindParam(2, $password);
$statement->execute([$username, $password]);

$success = false;
$find_user = null;

foreach ($statement as $row) {
    //sukses
    $success = true;
    $find_user = $row["username"];
}

if ($success) {
    echo "Sukses Login: " . $find_user . PHP_EOL;
} else {
    echo "Gagal Login: " . PHP_EOL;
}

$connection = null;

?>