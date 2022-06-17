<?php
include('./connect.php');
require_once('./functions.php');
$posts  = getPost();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ikea Hacks</title>
</head>

<body>
    <nav>
        <ul class="nav-bar">
            <div class="logo">
                <input type="image" src="./assets/ikea-logo(1).png" height="46px" width="100px" />
            </div>
            <div class="nav-bar-elements">
                <li> <input type="text" class="search-bar" placeholder="Search.."> </li>
                <li><a class="login-btn" href="./login.php"><i class="fa fa-fw fa-user"></i> Login</a></li>
            </div>
        </ul>
    </nav>
    <?php foreach ($posts as $post) : ?>
    <div class=" grid-container">
        <div class="post-grid"">
        <img src=" <?php echo BASE_URL . '/assets/' . $post['image']; ?>" class="post-image" alt="">

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