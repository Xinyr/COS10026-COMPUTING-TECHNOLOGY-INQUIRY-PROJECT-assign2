<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry Form Confirmation</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <?php include "./include/navbar.php"; ?>
    <div class="body_enquiry">
        <div class="enquiry_image-container">
            <div class="enquiry_image-section">
                <img src="./images/Herbarium_image.jpg" alt="Herbarium" class="enquiry-image">
            </div>

            <div class="enquiry_form-section">
                <h2 class="enquiry_h2">Enquiry Confirmation</h2>

                <?php
                // Include database connection
                include('connection.php');

                // Retrieve form data
                $firstName = $_POST['firstName'];
                $lastName = $_POST['lastName'];
                $email = $_POST['email'];
                $streetAddress = $_POST['streetAddress'];
                $city = $_POST['city'];
                $state = $_POST['state'];
                $postcode = $_POST['postcode'];
                $phone = $_POST['phone'];
                $tutorial = $_POST['tutorial'];

                // Database connection details
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "Herbarium_DB";

                // Establish connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);

                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Insert data into the database
                $sql = "INSERT INTO Enquiry_Form (firstName, lastName, email, streetAddress, city, state, postcode, phone, tutorial) 
                            VALUES ('$firstName', '$lastName', '$email', '$streetAddress', '$city', '$state', '$postcode', '$phone', '$tutorial')";

                if (mysqli_query($conn, $sql)) {
                    echo "<p>Thank you, $firstName $lastName, for your enquiry!</p>";
                    echo "<fieldset>";
                    echo "<legend>Submitted Details</legend>";
                    echo "<p><strong>Email:</strong> $email</p>";
                    echo "<p><strong>Address:</strong> $streetAddress, $city, $state, $postcode</p>";
                    echo "<p><strong>Phone:</strong> $phone</p>";
                    echo "<p><strong>Tutorial Selected:</strong> $tutorial</p>";
                    echo "</fieldset>";
                } else {
                    echo "<p>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
                }


                // Close the connection
                mysqli_query($conn, $sql);
                mysqli_close($conn);
                ?>

                <!-- Return Button -->
                <div class="return-button-container">
                    <a href="Enquiry-register.php" class="Enquiry-confirm-button-return">Return to Enquiry</a>
                </div>
            </div>
        </div>
    </div>
    <?php include "./include/footer.php"; ?>
</body>

</html>