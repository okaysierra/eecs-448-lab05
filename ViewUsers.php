<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "sseacat", "vZFhQCymmaDqpWvs", "sseacat");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT user_id FROM Users ORDER by user_id";

if($result = $mysqli->query($query)){
  while ($row = $result->fetch_assoc()) {
        printf ("%s (%s)\n", $row["user_id"]);
    }
    $result->free();
}

$mysqli->close();

?>
