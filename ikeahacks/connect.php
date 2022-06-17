<?php
//Brugt flere steder til at connecte til databasen
session_start();

$conn = mysqli_connect("localhost", "root", "", "ikeaDB");
if (mysqli_connect_errno()) {
    exit('Fejl i forbindelsen...' . mysqli_connect_error());
}

define('BASE_URL', 'http://localhost/ikeahacks/');