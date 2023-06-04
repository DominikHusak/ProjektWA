<?php
$servername = "LocalServer"; 
$username = "root"; 
$password = "Husak2004"; 
$database = "husak2"; 
$conn = new mysqli($servername, $username, $password, $database) or die("Unable to connect");

echo "Successfully connect";
?>