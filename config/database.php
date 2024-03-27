<?php

$host = "ID211210_bucket.db.webhosting.be";
$dbname = "ID211210_bucket";
$username = "ID211210_bucket";
$password = "Bucket123";

try {
    
    $conn = new PDO(
        "mysql:host=$host;dbname=$dbname",
        $username,
        $password,
    );

    // Set PDO attributes
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}