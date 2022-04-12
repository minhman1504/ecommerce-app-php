<?php

require "config/constants.php";

// $servername = getenv("DB_HOST");
// $username = getenv("DB_USER");
// $password = getenv("DB_USER");
// $db = getenv("DB_USER");

// Create connection
$con = mysqli_connect(getenv("DB_HOST"), getenv("DB_USER"), getenv("DB_PASSWORD"), getenv("DB_NAME"));

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>