<?php include('signuphandler.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opret bruger</title>
    <link rel="stylesheet" href="signup-style.css">
</head>

<body>
    <div id="container">
        <div class="box">
            <div class="signup-form">
                <form action="signup.php" method="post">
                    <input class="signup-form-input" type="text" placeholder="Fornavn" name="firstname" id="firstname"
                        required>
                    <input class="signup-form-input" type="text" placeholder="Efternavn" name="lastname" id="lastname"
                        required>
                    <input class="signup-form-input" type="email" placeholder="Email" name="email" id="email" required>
                    <input class="signup-form-input" type="password" placeholder="Password" name="password"
                        id="password" required>
                    <button class="signup-form-btn" type="submit" name="reg_user">Opret</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>