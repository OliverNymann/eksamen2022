<?php

//Henter alle offentliggjorte posts fra databasen
function getPost()
{
    global $conn;
    $query = "SELECT * FROM posts WHERE public=true";
    $result = mysqli_query($conn, $query);

    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $public_posts = array();
    foreach ($posts as $post) {
        $post['category'] = getCategory($post['id']);
        array_push($public_posts, $post);
    }
    return $public_posts;
}

//Henter kategori fra databasen
function getCategory($post_id)
{
    global $conn;
    $query = "SELECT * FROM category WHERE id=(SELECT category_id FROM post_category WHERE post_id=$post_id) LIMIT 1";
    $result = mysqli_query($conn, $query);
    $category = mysqli_fetch_assoc($result);
    return $category;
}

//Henter side for enkelte post som har en kategori og er offentlig
//Slug = kategori navn
function loadPost($getSlug)
{
    global $conn;

    $getSlug = $_GET['slug'];
    $query = "SELECT * FROM posts WHERE slug='$getSlug' AND public=true";
    $result = mysqli_query($conn, $query);

    $post = mysqli_fetch_assoc($result);
    if ($post) {
        $post['category'] = getCategory($post['id']);
    }
    return $post;
}
//Henter kategorien for den enkelte post
function getThisCategory()
{
    global $conn;
    $query = "SELECT * FROM category";
    $result = mysqli_query($conn, $query);
    $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $categories;
}

//Henter alle posts inden for en bestemt kategori fx "Stole".
function getPostsByCategory($category_id)
{
    global $conn;
    $query = "SELECT * FROM posts WHERE id IN 
			(SELECT post_id FROM post_category 
			WHERE category_id=$category_id GROUP BY post_id 
			HAVING COUNT(1) = 1)";
    $result = mysqli_query($conn, $query);
    // fetch all posts as an associative array called $posts
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $categoryPosts = array();
    foreach ($posts as $post) {
        $post['category'] = getCategory($post['id']);
        array_push($categoryPosts, $post);
    }
    return $categoryPosts;
}

//Bruger id til at hente kategoriens navn
function getCategoryNameById($id)
{
    global $conn;
    $query = "SELECT name FROM category WHERE id=$id";
    $result = mysqli_query($conn, $query);
    $category = mysqli_fetch_assoc($result);
    return $category['name'];
}