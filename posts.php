<?php

require_once('./database.php');
require_once('./queries.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  
  $query = allPosts();
  $posts = runQuery($query);

  header("Content-type: application/json");
  echo json_encode($posts);
}
