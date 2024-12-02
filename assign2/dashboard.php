<?php
session_start();

// Redirect to login if the user is not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Profile Page" />
    <meta name="keywords" content="HTML, CSS, JavaScript" />
    <meta name="author" content="Mohamad Faridz Faisal Bin Mohamad Isham" />
    <title>Herbarium Log In</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
</head>
<body class="login_color">
    <?php include "./include/navbar.inc" ?> 
    <div class="margin20percenttop">
        <div class="logincontainer">
            <div class="loginform">
                <div class="form">

                <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
                <p>You are logged in as <?php echo htmlspecialchars($_SESSION['role']); ?>.</p>
                <div class="padding20percent">
                        <button class="ebutton"><a class="tutorialSelectWord"href="logout.php">Log Out</a></button>
                </div>
                
                </div>
            </div>
        </div> 
    </div> 
        <?php include "./include/footer.inc" ?>
</body>
</html>