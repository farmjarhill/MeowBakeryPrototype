<?php
// Check if a session is not already started before starting one
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Rest of your database connection code
$connection = mysqli_connect("localhost:3306", "root", "", "meo");
?>