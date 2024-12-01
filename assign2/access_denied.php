<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Access Denied Page" />
    <meta name="keywords" content="HTML, CSS, PHP" />
    <meta name="author" content="Your Name" />
    <title>Access Denied</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body class="login_color">
    <?php include "./include/navbar.php"; ?> 

    <div class="form">
        <h1>Access Denied</h1>
        <p>Oops! You need to log in if you want to access the page you tried to visit.</p>
        <a href="login.php">Click here to log in</a>
    </div>

    <?php include "./include/footer.php"; ?>
</body>
</html>