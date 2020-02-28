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

// search for line breaks
if (strpos($post_content, "\n") !== FALSE) {
  // new line 2 <br /> php function
  $new_str = nl2br($post_content);
}

$mysqli = new mysqli("localhost", "root", "root", "coronachan_db");
if ($mysqli->connect_error) {
  exit('Error connecting to database'); //Should be a message a typical user could understand in production
}
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli->set_charset("utf8mb4");

$stmt = $mysqli->prepare("INSERT INTO posts (username, post_title, post_content, post_image) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $username, $post_title, $new_str, $post_image);
$stmt->execute();
if ($stmt->affected_rows === 0) exit('No rows updated');
$stmt->close();

// $query = createPost($username, $post_title, $post_content, $post_image);
// $post = runQuery($query);

// header("Content-type: application/json");
// echo json_encode($post);
