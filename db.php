<?php
$servername = "localhost";
$username = "uyts2sbwpduy3";
$password =  "e3etyn4p2ggu";  // Your MySQL password 
$dbname = "dbskk7qm4tocux";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
