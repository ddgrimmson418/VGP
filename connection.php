<?php
    $servername = "localhost";
$username = "DDG";
$password = "deepanshu";


// Create connection
$conn = new mysqli($servername, $username, $password,"grievance");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>