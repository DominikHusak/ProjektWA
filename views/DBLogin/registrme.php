<?php
    include 'db.php';
    session_start();
    
    $username = $_POST["Username"];
    $email = $_POST["Email"];
    $password = $_POST["Password"];

    $sql = "INSERT INTO UserAccount (user_name, user_email, user_password) VALUES ('$username', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>