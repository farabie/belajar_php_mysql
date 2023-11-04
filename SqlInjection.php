<?php

require_once __DIR__ . "/GetConnection.php";

//SQL Injection adalah sebuah teknik yang menyalahgunakan sebuah celah keamanan yang terjadi dalam lapisan basis data sebuah aplikasi.


$connection = getConnection();

// $username = "admin'; #"; //dengan penulisan hardcode seperti ini pada program maka bisa akan terjadi sql injection
//Solusi untuk mengatasi sql injection

/*
Function query() dan execute() tidak bisa menangani celah SQL Injection, jadi kita harus menanganinya secara manual
Direkomendasikan menggunakan function query() dan execute() jika memang kita tidak butuh parameter dari input user ketika membuat perintah SQL 
Jika membutuhkan parameter dari input user, kita wajib menggunakan function prepare(sql) yang akan kita bahas selanjutnya
Atau bisa juga memastikan input user aman dengan menggunakan function quote()

*/

$username = $connection->quote("admin'; #");
$password = $connection->quote("admin");

$sql = "SELECT * FROM admin WHERE username = $username AND password= $password";

$statement = $connection->query($sql);

$success = false;
$find_user = null;

foreach ($statement as $row) {
    //sukses
    $success = true;
    $find_user = $row["username"];
}

if ($success) {
    echo "Sukses Login " . $find_user . PHP_EOL;
} else {
    echo "Gagal Login" . PHP_EOL;
}
$connection = null;


?>