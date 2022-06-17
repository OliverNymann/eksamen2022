<?php
//Fjerner id og name fra session og destruere sessionen så der ikke er noget info tilbage.
//Sender en til forsiden når gjort
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
session_destroy();
header("Location: index.php");