<?php
//Bruges til at oprette post, men query fra createPostHandler.php virker ikke. Dog kan man stadig
//Oprette brugere i phpMyAdmin.
include('./functions.php');
include('./connect.php');
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
    <div id="container">
        <div class="box">
            <div class="create-post-form">
                <form action="createPostHandler.php" method="post">
                    <input class="create-form-input" type="text" placeholder="Titel" name="title" id="title" required>
                    <input class="create-form-input" type="text" placeholder="Image" name="image" id="image" required>
                    <input class="create-form-input" type="text" placeholder="Usertext" name="usertext" id="usertext"
                        required>
                    <input class="create-form-input" type="text" placeholder="Kategori" name="slug" id="slug" required>
                    <button class="create-form-btn" type="submit" name="create_post">Opret</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>