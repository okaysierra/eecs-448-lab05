<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "sseacat", "vZFhQCymmaDqpWvs", "sseacat");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$username = $_POST["username"];
$content = $_POST["body"];

$check = "SELECT user_id
          FROM Users
          WHERE user_id==". $username "";

if($mysqli->query($check)==true)
{

  $query = "INSERT INTO Posts(content, author_id) VALUES(" . $content . "," . $body .")";

  if($mysqli->query($query)==true) {
    echo "Post successfully created.";
  }
  else{
    echo "Post not created. Body is empty.";
  }
}
else{
  echo "User not found. Post not created.";
}

mysqli->close();

?>
