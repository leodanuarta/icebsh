<?php

session_start();

$username = "admin";
$_SESSION['username'] = $username;

$id_session  = $_SESSION['username'];

echo $id_session;


header("Location:home.php");

?>