<?php


require_once __DIR__ . "/GetConnection.php";
require_once __DIR__ . "/Model/Comment.php";
require_once __DIR__ ."/Repository/CommentRepository.php";

use Repository\CommentRepositoryImpl;
use Model\Comment;

//Jadi keunggulan dari repository pattern
//Untuk di bisnis logic nya tidak ada sql code untuk model dan sql code ada di folder model dan repositorynya

$connection = getConnection();
$repository = new CommentRepositoryImpl($connection);	

//Test Fungsi Insertnya
// $comment = new Comment(email: "repository@test.com", comment: "Hallo");
// $newComment = $repository->insert($comment);
// var_dump($newComment->getId());

//Test untuk findbyid
// $comment = $repository->findById(70);
// var_dump($comment);

//Test untuk find all atau menampilkan sebuah object dari tabel comment
$comment = $repository->findAll();
var_dump($comment);

$connection = null;

?>