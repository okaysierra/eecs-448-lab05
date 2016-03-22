<?php
  $mysqli = new mysqli("mysql.eecs.ku.edu", "sseacat", "vZFhQCymmaDqpWvs", "sseacat");

  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }

  $user = $_POST["users"];

  $query = "SELECT content FROM Posts WHERE user_id=". $user ."";


  if($result = $mysqli->query($query)){
    while ($row = $result->fetch_assoc()) {
          printf ("%s (%s)\n", $row["content"]);
      }
      $result->free();
  }

  $mysqli->close();

?>
