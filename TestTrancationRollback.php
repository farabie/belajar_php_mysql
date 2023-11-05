<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();
//Untuk fungsi begintransaction dia menunggu dulu untuk commitnya sampai transaksi selesai
//Jadi untuk transaksi itu satu sukses sukses semua jika ada satu gagal maka dia tidak di commit
$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, comment) VALUES ('abietest@gmail.com', 'Hello')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('abietest@gmail.com', 'Hello lagi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('abietest@gmail.com', 'Hello lagi')");

//Semuanya di rollback atau dibatalkan semua
$connection->rollBack();
$connection = null;

?>