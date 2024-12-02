<?php
session_start();

// Check if the user is logged in and has an admin role
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    // Redirect to login page if not authorized 
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en" class="profile_page faridz">
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Assignment 2" />
        <meta name="keywords" content="Herbarium, " />
        <meta name="authors" content="Mohamad Faridz Faisal Bin Mohamad Isham" />
        <title>Admin View</title>
        <link rel="icon" type="image/x-icon" href="./images/favicon.png">
        <link rel="stylesheet" href="./styles/style.css" />
    </head>
    <body>
        <?php include './include/admin_navbar.inc' ?>
        <div class="admin_page">
            <h1>Welcome Admin!</h1>
            <h2>Refer to the navbar on your left to switch between submitted data</h2>
        </div>   
    </body>
</html>