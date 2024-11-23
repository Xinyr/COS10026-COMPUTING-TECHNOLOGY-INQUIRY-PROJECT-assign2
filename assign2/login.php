<?php
// Start session to save login status
session_start();

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Herbarium_DB";

// Check if the login button is clicked
if (isset($_POST['login'])) {
    // Get username and password from the form
    $usersname = $_POST['usersname'];
    $passkey = $_POST['passkey'];

    // Create database connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare SQL to prevent SQL injection
    $sql = "SELECT * FROM Accounts WHERE usersname = ?"; 
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 's', $usersname); // Bind the correct variable
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Check if the user exists
    if ($row = mysqli_fetch_assoc($result)) {
        // Verify the password
        if ($passkey === $row['passkey']) {  // Assuming passwords are hashed2
            // Set session variables
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['usersname'];
            $_SESSION['role'] = $row['role']; // Optionally store the user's role

            // Redirect based on role
            if ($_SESSION['role'] == 'admin') {
                header("Location: admin_view.php");  // Redirect to admin page
                exit;
            } else {
                header("Location: user_dashboard.php"); // Redirect to regular user page
                exit;
            }
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }

    // Close connection
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
<?php include "./include/navbar.php" ?>
    <div class="form">
        <div class="boxlogin">
                <h1>Log In </h1>
            </div>
       
        <div class="logincontainer">
        <div class="loginform">
                <div class="form-section">
                    <form method="post" action="login.php">
                        <h2>Log in here</h2>
                        <label for="usersname">Username:</label>
                        <input type="text" name="usersname" id="usersname" required="required" placeholder="Username/Email:"> <br> <br>
                        <label for="passkey">Password:</label>
                        <input type="password" name="passkey" id="passkey" required="required" placeholder="Password:"> <!-- Corrected type -->
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
    <?php include "./include/footer.php" ?>
</body>
</html>
