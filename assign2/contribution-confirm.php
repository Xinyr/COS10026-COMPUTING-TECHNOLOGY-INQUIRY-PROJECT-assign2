<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contribution Form Confirmation</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <?php include "./include/navbar.php"; ?>
    <div class="body_contribution">
        <div class="contribution-image-container">
            <div class="contribution-image-section">
                <img src="./images/contribution-herbarium.jpg" alt="Herbarium" class="contribution-image">
            </div>

            <div class="contribution-form-section">
                <h2 class="h1-contribution">Contribution Confirmation</h2>

                <?php
                    // Include database connection
                    include('connection.php');

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

                    // Retrieve form data
                    $plantName = $_POST['plantName'];
                    $plantFamily = $_POST['plantFamily'];
                    $plantGenus = $_POST['plantGenus'];
                    $plantSpecies = $_POST['plantSpecies'];
                    
                    // Handle file uploads
                    $uploadDir = "./uploads/";
                    $allowedTypes = ['image/jpeg', 'image/png', 'image/jpg'];
                    
                    // Handle Fresh Leaf Photo
                    $freshLeafPhoto = $_FILES['freshLeafPhoto'];
                    $freshLeafPhotoPath = $uploadDir . basename($freshLeafPhoto['name']);
                    if (!in_array($freshLeafPhoto['type'], $allowedTypes)) {
                        die("Invalid file type for Fresh Leaf Photo. Only JPG, JPEG, and PNG are allowed.");
                    }
                    if (!move_uploaded_file($freshLeafPhoto['tmp_name'], $freshLeafPhotoPath)) {
                        die("Failed to upload Fresh Leaf Photo.");
                    }
                    
                    // Handle Herbarium Photo
                    $herbariumPhoto = $_FILES['herbariumPhoto'];
                    $herbariumPhotoPath = $uploadDir . basename($herbariumPhoto['name']);
                    if (!in_array($herbariumPhoto['type'], $allowedTypes)) {
                        die("Invalid file type for Herbarium Photo. Only JPG, JPEG, and PNG are allowed.");
                    }
                    if (!move_uploaded_file($herbariumPhoto['tmp_name'], $herbariumPhotoPath)) {
                        die("Failed to upload Herbarium Photo.");
                    }

                    // Insert data into the database
                    $sql = "INSERT INTO Contributions (plantName, plantFamily, plantGenus, plantSpecies, freshLeafPhoto, herbariumPhoto, submission_date)
                    VALUES (?, ?, ?, ?, ?, ?, NOW())";
            $stmt = mysqli_prepare($conn, $sql);

                    if ($stmt) {
                    mysqli_stmt_bind_param($stmt, "ssssss", $plantName, $plantFamily, $plantGenus, $plantSpecies, $freshLeafPhotoPath, $herbariumPhotoPath);
                    if (mysqli_stmt_execute($stmt)) {
                    echo "<h1>Contribution Submitted Successfully</h1>";
                    echo "<p>Thank you for your contribution to the Herbarium collection!</p>";
                    echo "<p>Details:</p>";
                    echo "<ul>
                            <li>Plant Name: $plantName</li>
                            <li>Plant Family: $plantFamily</li>
                            <li>Plant Genus: $plantGenus</li>
                            <li>Plant Species: $plantSpecies</li>
                        </ul>";
                    echo "<p><strong>Uploaded Photos:</strong></p>";
                    echo "<img src='$freshLeafPhotoPath' alt='Fresh Leaf Photo' style='max-width: 300px;'><br>";
                    echo "<img src='$herbariumPhotoPath' alt='Herbarium Photo' style='max-width: 300px;'>";
                    } else {
                    echo "<p>Error saving your contribution: " . mysqli_stmt_error($stmt) . "</p>";
                    }
                    mysqli_stmt_close($stmt);
                    } else {
                    echo "<p>Error preparing the query: " . mysqli_error($conn) . "</p>";
                    }

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