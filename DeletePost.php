<?php
mysqli = new mysqli("mysql.eecs.ku.edu", "sseacat", "vZFhQCymmaDqpWvs", "sseacat");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$deletes = $_POST["selectposts"];

echo $deletes;

$query = "DELETE FROM Posts WHERE post_id = " . $deletes . "";

$mysqli->close();

?>
