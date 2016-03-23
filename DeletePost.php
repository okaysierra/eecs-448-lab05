<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "sseacat", "vZFhQCymmaDqpWvs", "sseacat");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


echo "Posts being deleted<br>";
if(!empty($_POST["selectposts"])){
foreach($_POST["selectposts"] as $deletes){
  echo "$deletes<br>";
  $query = "DELETE FROM Posts WHERE post_id ='$deletes'";
  $mysqli->query($query);
}
}

$mysqli->close();

?>
