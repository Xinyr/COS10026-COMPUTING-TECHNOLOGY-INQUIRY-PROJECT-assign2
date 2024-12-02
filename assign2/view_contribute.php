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
<html lang="en">

<head>
    <title>View Contribute</title>
    <meta name="author" content="Kai Seng Bong"/>
    <meta name="description" content="Assignment 2"/>
    <meta name="keywords" content="Herbarium, View_Contribute"/>
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <link rel="stylesheet" href="styles/style.css">
</head>


<body class ="view_contribute">
    <?php include './include/admin_navbar.inc'?>
    <div class="admin_page">
        <h1>Contribution Page</h1>

        <table class="contribute_table">
                <tr>
                    <th>No</th>
                    <th width="150px">Plant Name</th>
                    <th width="150px">Plant Family</th>
                    <th width="150px">Plant Genus</th>
                    <th width="150px">Plant Species</th>
                    <th width="100px">Photo Upload(Fresh Leaf)</th>
                    <th width="100px">Photo Upload(Herbarium)</th>
                    <th width="100px">Submission date</th>

                </tr>


        <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "Herbarium_DB";

                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);

                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    // Debug: Output a message to confirm connection success
                    echo "<p></p>";

                    // SQL query
                    $sql = "SELECT * FROM contributions";
                    echo "<p></p>"; // Debug: Output query

                    $result = mysqli_query($conn, $sql);

                    // Check if the query executed successfully
                    if (!$result) {
                        die("Query failed: " . mysqli_error($conn));
                    }

                    // Check if query returned any rows
                    if (mysqli_num_rows($result) > 0) {
                        // Fetch and display each row
                        while ($row = mysqli_fetch_assoc($result)) {
                ?>

                    <tr>
                        <td><?php echo htmlspecialchars($row["id"]); ?></td>
                        <td><?php echo htmlspecialchars($row["plantName"]); ?></td>
                        <td><?php echo htmlspecialchars($row["plantFamily"]); ?></td>
                        <td><?php echo htmlspecialchars($row["plantGenus"]); ?></td>
                        <td><?php echo htmlspecialchars($row["plantSpecies"]); ?></td>
                        <td>
                            <?php 
                                if (!empty($row["freshLeafPhoto"])) {
                                    echo '<img src="' . htmlspecialchars($row["freshLeafPhoto"]) . '" width="80px" alt="Fresh Leaf Photo">';
                                } else {
                                    echo 'N/A';
                                }
                            ?>
                        </td>
                        <td>
                            <?php 
                                if (!empty($row["herbariumPhoto"])) {
                                    echo '<img src="' . htmlspecialchars($row["herbariumPhoto"]) . '" width="80px" alt="Herbarium Photo">';
                                } else {
                                    echo 'N/A';
                                }
                            ?>
                        </td>
                        <td><?php echo htmlspecialchars($row["submission_date"]); ?></td>
                    </tr>

        <?php 
                    }
                } else {
                    echo "<tr><td colspan='5'>No results found</td></tr>";
                }

                // Close connection
                mysqli_close($conn);
        ?>
        </table>
    </div>
</body>
</html>