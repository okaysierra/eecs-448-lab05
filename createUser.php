<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "sseacat", "vZFhQCymmaDqpWvs", "sseacat");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


$username = $_POST["username"];

if($username != NULL || $username != "" || $username != "username"){
  "INSERT INTO Users(user_id) VALUES(" .$username. ")";
  echo "User successfully created";
}
else{
  echo "Username invalid. User not created."
}


$mysqli->close();

?>
