<?php
$servername = "sql107.infinityfree.com";        // Fixed typo
$username = "if0_39012409";               // Default XAMPP user
$password = "compnytola";                   // No password by default in XAMPP
$dataname = "if0_39012409_crud";           // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dataname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
