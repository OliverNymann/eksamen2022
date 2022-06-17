<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login-style.css">
</head>

<body>
    <div id="container">
        <div class="box">

            <form class="form-box" action="./auth.php" method="post">
                <input class="login-form-input" type="email" placeholder="Email" name="email" id="email" required>
                <input class="login-form-input" type="password" placeholder="Password" name="password" id="password"
                    required>
                <input type="checkbox" onclick="myFunction()">Vis Password
                <button class="login-form-btn" type="submit">Login</button>
                <p class="text"><a href="#">Glemt password</a> eller <a href="./signup.php">Opret Bruger</a></p>
            </form>
        </div>
    </div>

    <script src="extraFunctions.js"></script>
</body>

</html>