<?php

session_start();

require_once('./database.php');
require_once('./queries.php');

// This must be a post request with a username and a password
// Remember to use password_verify() to check the plain password against the hashed version
if (isset($_POST['username']) && isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = loginUser($username);
  $id = runQuery($query);

  $user = json_encode($id[0][id]);

  if (!$id) {
    echo "Something bad happened";
    exit();
  }

  $_SESSION['username'] = $username;
  echo json_encode(['message' => 'Welcome!', 'session' => $_SESSION]);

  // else {
  //   echo "Incorrect password";
  // }
}
