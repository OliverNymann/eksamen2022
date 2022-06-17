<?php

session_start();

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
//Viser hvad der skal sendes med når man trykker på opret knappen
if (isset($_POST['reg_user'])) {
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
}
//Tjekker at der ikke allerede er en bruger med den email
$user_exists_check = "SELECT * FROM users WHERE email='$email' LIMIT 1";
$result = mysqli_query($conn, $user_exists_check);
$user = mysqli_fetch_assoc($result);
//Hvis der er kommer der en fejl
if ($user['email'] === $email) {
    array_push($error_list, "email already exists");
}
//Hvis der ingen fejl er (Altså alt er udfyldt og emailen er ikke i brug, så indsættes dataen i users tablet)
if (count($error_list) === 0) {
    $query = "INSERT INTO users (firstname, lastname, email, password)
              VALUES('$firstname', '$lastname', '$email', '$password')";
    mysqli_query($conn, $query);
    $_SESSION['firstname'] = $firstname;
    header('location: login.php');
}