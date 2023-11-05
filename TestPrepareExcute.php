<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "tisu";
$password = "tisu";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$statement = $connection->prepare($sql);
//Test prepare dengan excute
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