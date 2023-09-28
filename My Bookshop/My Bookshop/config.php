<?php
$servername="localhost";
$username="job180068_mybookshop";
$password="TN(tV*iNJN5*";
$dbname="job180068_mybookshop";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 //Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
