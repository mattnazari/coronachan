<?php

require_once('./database.php');
require_once('./queries.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // reading json object from axios input
  $data = json_decode(file_get_contents("php://input"), true);
  $title = $data['title'];

  $mysqli = new mysqli("localhost", "root", "root", "coronachan_db");
  if ($mysqli->connect_error) {
    exit('Error connecting to database'); //Should be a message a typical user could understand in production
  }
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $mysqli->set_charset("utf8mb4");

  $stmt = $mysqli->prepare("DELETE FROM posts WHERE post_title = ?");
  $stmt->bind_param("s", $title);
  $stmt->execute();
  if ($stmt->affected_rows === 0) exit('No rows updated');
  $stmt->close();

  // $query = deletePost($title);
  // $delete = runQuery($query);

  // header("Content-type: application/json");
  // echo json_encode($delete);
}
