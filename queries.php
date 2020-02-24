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