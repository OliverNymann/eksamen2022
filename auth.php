<?php

session_start();

$host = 'localhost';
$user = 'root';
$pass = '';
$dbName = 'ikeadb';

$conn = mysqli_connect($host, $user, $pass, $dbName);
if (mysqli_connect_errno()) {
    exit('Fejl i forbindelsen...' . mysqli_connect_error());
}

if ($query = $conn->prepare('SELECT id, password FROM users WHERE email = ?')) {
    $query->bind_param('s', $_POST['email']);
    $query->execute();
    $query->store_result();

    if ($query->num_rows > 0) {
        $query->bind_result($id, $password);
        $query->fetch();

        if ($_POST['password'] === $password) {
            session_regenerate_id();
            $_SESSION['userloggedin'] = TRUE;
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['id'] = $id;
            header('Location: home.php');
        } else {
            echo 'Forkert email eller password';
        }
    } else {
        echo 'Forkert email eller password';
    }

    $query->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="login.php">Tilbage</a>
</body>

</html>