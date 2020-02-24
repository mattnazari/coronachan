<?php

function allPosts() {
  return "
  SELECT *
  FROM posts
  ";
}

function deletePost($title) {
  return "
  DELETE FROM posts
  WHERE post_title = '$title'
  ";
}

function loginUser($username) {
  return "
  SELECT *
  FROM users
  WHERE username = '$username'
  ";
}