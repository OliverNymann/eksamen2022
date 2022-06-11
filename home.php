<?php

session_start();
if (!isset($_SESSION['userloggedin'])) {
    header('Location: login.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Ikea Hacks</title>
</head>

<body>
    <nav>
        <ul class="nav-bar">
            <div class="logo">
                <input type="image" src="./assets/ikea-logo(1).png" height="46px" width="100px" />
            </div>
            <div class="nav-bar-elements">
                <ul class="burger-menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Work</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Hej</a></li>
                    <li><a href="#">Hej</a></li>
                    <li><a href="#">Hej</a></li>
                    <li><a href="#">Hej</a></li>
                    <li><a href="#">Hej</a></li>
                    <li><a href="#">Hej</a></li>
                    <li><a href="#">Hej</a></li>
                    <li><a href="#">Hej</a></li>
                </ul>
                <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <li> <input type="text" class="search-bar" placeholder="Search.."> </li>
                <li><a class="logout-btn" href="./logout.php">Logout</a></li>
            </div>
        </ul>
    </nav>
    <main>
        <div class="grid-view">
            <div class="card"><input type="image" src="./assets/woocommerce-placeholder-275x275.png"
                    class="user-picture" </div>
                <div class="card"><input type="image" src="./assets/woocommerce-placeholder-275x275.png"
                        class="user-picture" </div>
                    <div class="card"><input type="image" src="./assets/woocommerce-placeholder-275x275.png"
                            class="user-picture" </div>
                        <div class="card"><input type="image" src="./assets/woocommerce-placeholder-275x275.png"
                                class="user-picture" </div>
                            <div class="card"><input type="image" src="./assets/woocommerce-placeholder-275x275.png"
                                    class="user-picture" </div>
                                <div class="card"><input type="image" src="./assets/woocommerce-placeholder-275x275.png"
                                        class="user-picture" </div>
                                    <div class="card"><input type="image"
                                            src="./assets/woocommerce-placeholder-275x275.png" class="user-picture"
                                            </div>
                                        <div class="card"><input type="image"
                                                src="./assets/woocommerce-placeholder-275x275.png" class="user-picture"
                                                </div>
                                            <div class="card"><input type="image"
                                                    src="./assets/woocommerce-placeholder-275x275.png"
                                                    class="user-picture" </div>

                                            </div>
    </main>
    <script src="index.js"></script>
</body>

</html>