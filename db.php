<?php

$servername = "sql108.infinityfree.com";

$username = "if0_42431621";

$password = "a6YBbyqZzqTDrw3";

$dbname = "if0_42431621_XXX";

$port = 3306;


$conn = new mysqli($servername, $username, $password, $dbname, $port);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>