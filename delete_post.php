<?php

require_once('./database.php');
require_once('./queries.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // reading json object from axios input
  $data = json_decode(file_get_contents("php://input"), true);
  $title = $data['title'];
  
  $query = deletePost($title);
  $delete = runQuery($query);

  header("Content-type: application/json");
  echo json_encode($delete);
}
