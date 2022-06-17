<?php // Inkludere filer der forbinder til database og filen med funktioner
?>
<?php include('connect.php'); ?>
<?php include('functions.php') ?>
<?php // Henter all posts
?>
<?php $posts  = getPost(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="admin-style.css">
</head>

<body>
    <div class="nav-bar">
        <ul class="admin-menu">
            <li><a href="./admindashboard.php">Overblik</a></li>
            <li><a href="#">Brugerliste</a></li>
            <li><a href="#">Rediger</a></li>
            <li><a href="#">?</a></li>
            <li><a class="logout-btn" href="./logout.php">Logout</a></li>
        </ul>
    </div>
    <?php //Iterere igennem alle post i "posts" tablet i databasen og sætter dem ind på siden
    ?>
    <?php foreach ($posts as $post) : ?>
    <div class=" grid-container">
        <div class="post-grid"">
        <img src=" <?php echo BASE_URL . '/assets/' . $post['image']; ?>" class="post-image" alt="">
            <?php //Hvis posten har en kategori blive den også sat ind her (Alle post har en kategori)
                //Og den giver mulighed for at klikke på kategorien og gå ind på en side kun med post fra den kategori
                ?>
            <?php if (isset($post['category']['name'])) : ?>
            <a href="<?php echo BASE_URL . 'post_category_page.php?category=' . $post['category']['id'] ?>"
                class="category-btn">
                <?php echo $post['category']['name'] ?>
            </a>
            <?php endif ?>
            <a class="post-info" href="a_post.php?post-slug=<?php echo $post['slug']; ?>">
                <div class="post-title">
                    <h3><?php echo $post['title'] ?></h3>
                    <div class="info">
                        <span><?php echo date("F j, Y ", strtotime($post["created_time"])); ?></span>

                    </div>
                </div>
            </a>
        </div>
    </div>
    <?php endforeach ?>
</body>

</html>