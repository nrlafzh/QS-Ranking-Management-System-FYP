<?php
// login_process.php

// Start the session
session_start();

require_once("connection.php");

// Retrieve the entered username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Query the database to validate the user's credentials and retrieve the associated role
$query = "SELECT role FROM user WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $role = $row['role'];

    // Store the user's role in a session variable
    $_SESSION['role'] = $role;

    // Redirect the user to their respective page based on their role
    switch ($role) {
        case "data_secretariat":
            header("Location: dsdashboard.php");
            break;
        case "person_in_charge":
            header("Location: person_in_charge_dashboard.php");
            break;
        case "top_management":
            header("Location: top_management_dashboard.php");
            break;
        default:
            // Invalid role
            header("Location: login.php");
            break;
    }
} else {
    // Invalid credentials
    header("Location: login.php");
}
?>