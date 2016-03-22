<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "sseacat", "vZFhQCymmaDqpWvs", "sseacat");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


$content = $_POST["body"];
$username = $_POST["username"];


$query ="INSERT INTO Posts (content, author_id) VALUES('$content', '$username')";


  if($mysqli->query($query)===TRUE) {
    echo "Post successfully created.";
  }
  else{
    echo "Post not created.";
  }


$mysqli->close();

?>
