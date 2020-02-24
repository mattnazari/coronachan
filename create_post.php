<?php

require_once('./database.php');
require_once('./queries.php');


$data = json_decode(file_get_contents("php://input"), true);

// $post_title = $data['post-title'];
// $post_image = $data['image-url'];
// $post_content = $data['post-content'];

$username = 'admin';
$post_title = $_POST['post-title'];
$post_image = $_POST['image-url'];
$post_content = $_POST['post-content'];

$query = createPost($username, $post_title, $post_content, $post_image);
$post = runQuery($query);

header("Content-type: application/json");
echo json_encode($post);
