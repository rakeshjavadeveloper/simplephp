<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "user_regd";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {

    die("Unable to connect to given site.");
}
?>