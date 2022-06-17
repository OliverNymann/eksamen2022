<?php
include('./functions.php');

function loadPost($slug)
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

function getThisCategory()
{
    global $conn;
    $query = "SELECT * FROM category";
    $result = mysqli_query($conn, $query);
    $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $categories;
}