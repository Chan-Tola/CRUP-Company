<?php
include 'database.php';

$deleteId = $_GET['id'] ?? null;

if (!$deleteId) {
    die("No ID provided.");
}

$deleteId = (int)$deleteId;

// Delete from database
$conn->query("DELETE FROM staff WHERE id = $deleteId");

// Redirect with success message
echo "<script>window.location.href='../src/staffManagement.php?deleted=1';</script>";
exit();