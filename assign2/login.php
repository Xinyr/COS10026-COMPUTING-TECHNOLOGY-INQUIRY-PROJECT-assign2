<?php
session_start();

// Redirect logged-in users
if (isset($_SESSION['user_id'])) {
    // Redirect based on user role
    if ($_SESSION['role'] == 'admin') {
        header("Location: admin_view.php"); // Redirect admin users
    } else {
        header("Location: dashboard.php"); // Redirect regular users
    }
    exit;
}

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Herbarium_DB";

if (isset($_POST['login'])) {
    $usersname = $_POST['usersname'];
    $passkey = $_POST['passkey'];

    // Create database connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM Accounts WHERE usersname = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 's', $usersname);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Check if the user exists
    if ($row = mysqli_fetch_assoc($result)) {
        // Verify the password
        if ($passkey === $row['passkey']) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['usersname'];
            $_SESSION['role'] = $row['role'];

            // Redirect based on role
            if ($_SESSION['role'] == 'admin') {
                header("Location: admin_view.php");
            } else {
                header("Location: dashboard.php");
            }
            exit;
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
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
    <div class="form">
        <div class="boxlogin">
            <h1>Log In</h1>
        </div>
        <div class="logincontainer">
            <div class="loginform">
                <div class="form-section">
                    <form method="post" action="login.php">
                        <h2>Log in here</h2>
                        <label for="usersname">Username:</label>
                        <input type="text" name="usersname" id="usersname" required placeholder="Username/Email:" /> 
                        <br><br>
                        <label for="passkey">Password:</label>
                        <input type="password" name="passkey" id="passkey" required placeholder="Password:" />
                        <br>
                        <div class="padding20">
                            <button type="submit" name="login">Login</button>
                        </div><br>
                        <a href="./register.php">Haven't made an account yet?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include "./include/footer.inc" ?>
</body>
</html>