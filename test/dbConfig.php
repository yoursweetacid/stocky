<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "stocky";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
$db->query("SET NAMES 'utf8'");
$db->query("SET CHARACTER SET 'utf8'");
$db->query("SET SESSION collation_connection = 'utf8_general_ci'");

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>