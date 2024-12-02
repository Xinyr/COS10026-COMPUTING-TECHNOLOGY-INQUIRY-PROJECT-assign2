<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Confirmation</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body class="login_color">
<?php include "./include/navbar.inc" ?>
    <div class="form">
        <div class="boxlogin">
            <h1>Registration Confirmation</h1>
            
        <div class="logincontainer">
            <div class="loginform">    
                <?php
                    // Include database connection
                    include('connection.php');

                    // Retrieve form data
                    $firstName = $_POST['1name'];
                    $lastName = $_POST['lastname'];
                    $email = $_POST['email'];
                    $usersname = $_POST['usersname'];
                    $passkey = $_POST['passkey'];

                    // Database connection details
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "Herbarium_DB";

                    // Establish connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);

                    // Check connection
                    if(!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    // Insert data into the database
                    $sql = "INSERT INTO Accounts (1name, lastname, email, usersname, passkey) 
                            VALUES ('$firstName', '$lastName', '$email', '$usersname', '$passkey')";

                    if (mysqli_query($conn, $sql)) {
                        echo "<p>Thank you, $firstName $lastName, for your enquiry!</p>";
                        echo "<p>Your details have been successfully submitted.</p>";
                        echo "<p>Email: $email</p>";
                        echo "<p>Usersname: $usersname</p>";
                        echo "<p>Password: $passkey</p>";
                    } else {
                        echo "<p>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
                    }

                    // Close the connection
                    mysqli_close($conn);
                ?>

                <!-- Return Button -->
                 <div class="return-button-container">
                    <a href="register.php" class="Enquiry-confirm-button-return">Return to Register Page</a>
                 </div>
            </div>
        </div>
        </div>
    </div>
    <?php include "./include/footer.inc"; ?>
</body>

</html>