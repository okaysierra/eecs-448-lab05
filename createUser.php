<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "sseacat", "vZFhQCymmaDqpWvs", "sseacat");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


$username = $_POST["username"];
$query ="INSERT INTO Users(user_id) VALUES(" .$username. ")";

  if($mysqli->query($query)==true){
    echo "User successfully created";
  }
  else {
    echo "Username invalid, unable to create user";
  }


$mysqli->close();

?>
