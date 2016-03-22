<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "sseacat", "vZFhQCymmaDqpWvs", "sseacat");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


$username = $_POST["username"];

if($username == null || $username == "")
{
  echo "You must enter a username.";
}
else {

$query ="INSERT INTO Users VALUES('$username')";

  $success = $mysqli->query($query);

  if($success==true){
    echo "User successfully created";
  }
  else {
    echo "Username invalid, user already exists";
  }

}
$mysqli->close();

?>
