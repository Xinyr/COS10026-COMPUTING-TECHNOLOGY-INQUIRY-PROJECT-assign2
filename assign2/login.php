<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Profile Page" />
    <meta name="keywords" content="HTML, CSS, JavaScript" />
    <meta name="author" content="Mohamad Faridz Faisal Bin Mohamad Isham" />
    <title>Herbarium Log In</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body class="login_color">
<?php include "./include/navbar.php" ?>
    <div class="form">
        <div class="boxlogin">
                <h1>Log In </h1>
            </div>
       
        <div class="logincontainer">
        <div class="loginform">
                <div class="form-section">
                    <form method="post" action="mailto:104396635@students.swinburne.edu.my">
                        <h2>Log in here</h2>
                        <label for="username">Username:</label>
                        <input type="text" name="username" id="username" required="required" placeholder="Username/Email:"> <br> <br>
                        <label for="password">Password:</label>
                        <input type="text" name="password" id="password" required="required" placeholder="Password:">
                        <br>
                        <div class="padding20">
                        <button type="submit">Login</button>
                        </div><br>
                        <a href="./register.html">Havent made an account yet?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include "./include/footer.php" ?>
</body>