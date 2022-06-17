<?php
//Står for at indsætte info fra Createpost.php ind i databasen, der er ingen fejl, men dataen bliver ikke
//sat ind.
include('./functions.php');
include('./connect.php');

$host = 'localhost';
$user = 'root';
$pass = '';
$dbName = 'ikeadb';

$email = "";
$error_list = array();

$conn = mysqli_connect($host, $user, $pass, $dbName);
if (mysqli_connect_errno()) {
    exit('Fejl i forbindelsen...' . mysqli_connect_error());
}

if (isset($_POST['create_post'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $image = mysqli_real_escape_string($conn, $_POST['image']);
    $usertext = mysqli_real_escape_string($conn, $_POST['usertext']);
    $getSlug = mysqli_real_escape_string($conn, $_POST['slug']);
}

if (count($error_list) === 0) {
    global $conn, $title, $getSlug, $body, $public;
    $query = "INSERT INTO `posts`(`id`, `user_id`, `title`, `image`, `usertext`, `slug`, `public`, `created_time`) VALUES (1,'$user','$title','$image','$usertext','$getSlug','$public',now())";
    mysqli_query($conn, $query);
}