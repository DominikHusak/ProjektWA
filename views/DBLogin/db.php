<?php
$servername = "LocalServer"; 
$username = "root"; 
$password = "Husak2004"; 
$database = "husak2"; 
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    $status = "Připojení selhalo: " . $conn->connect_error;
} else {
    $status = "Připojení k databázi bylo úspěšné.";
}
echo $status;
$conn->close();
?>