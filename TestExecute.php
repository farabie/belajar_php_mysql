<?php 

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$sql = <<<SQL
        INSERT INTO customers(id, name, email)
        VALUES('Farel', 'Caca', 'Caca123@gmail.com')
SQL;

$connection->exec($sql);

//Untuk menutup koneksi database
$connection = null;

?>