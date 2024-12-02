<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Profile Page" />
    <meta name="keywords" content="HTML, CSS, JavaScript" />
    <meta name="author" content="Mohamad Faridz Faisal Bin Mohamad Isham" />
    <title>Herbarium Registration</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body class="login_color">
<?php include "./include/navbar.inc" ?>
    <div class="form">
        <div class="boxlogin">
                <h1>Registration </h1>
        </div>
        <div class="logincontainer">
            <div class="loginform">
            <form id="form" method="post" action="register-confirm.php">
                    <h2>Register here</h2>
                    <label for="1name">First Name:</label>
                    <input type="text" pattern="[A-Za-z]*" name="1name" id="1name" required="required" placeholder="Letters Only"> <br> <br>
                    <label for="lastname">Last Name:</label>
                    <input type="text" pattern="[A-Za-z]*" name="lastname" id="lastname" required="required" placeholder="Letters Only"> <br> <br>
                    <label for="usersname">Username</label>
                    <input type="text" name="usersname" id="usersname" required="required" placeholder="Name used to login from now on">
                    <label for="email">Email:</label>
                    <input class="logininput" type="email" name="email" id="email" required="required" placeholder="Example@example.example"> <br><br>
                    <label for="passkey">Password:</label>
                    <input class="logininput" type="text" pattern="[A-Za-z]*" name="passkey" id="passkey" required="required" placeholder="Letters Only">
                    <br>
                    <div class="padding20">
                        <button type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div> 
    </div>
    <?php include "./include/footer.inc" ?>
</body>