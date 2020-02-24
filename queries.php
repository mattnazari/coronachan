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

function createPost($username, $post_title, $post_content, $post_image) {
  return "
  INSERT INTO posts (username, post_title, post_content, post_image)
  VALUE ('$username', '$post_title', '$post_content', '$post_image')
  ";
}