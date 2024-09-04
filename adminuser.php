<?php
include 'config.php'; // Include your database connection

// Hash the password using PHP's password_hash function
$password = password_hash('1234', PASSWORD_DEFAULT);

// SQL query to insert the admin user
$sql = "INSERT INTO users (username, email, password, role) 
        VALUES ('admin', 'creamdiary@gmail.com', '$password', 'admin')";

if ($conn->query($sql) === TRUE) {
    echo "Admin user created successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
