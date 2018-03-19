<?php

$username = "thquesti_admin";
$password = "@@min001";
$hostname = "localhost";
$dbname = "thquesti_main";

// Create connection
$db = new mysqli($hostname, $username, $password,$dbname);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
mysqli_set_charset($db,"utf8");
// echo "Connected successfully";





?>