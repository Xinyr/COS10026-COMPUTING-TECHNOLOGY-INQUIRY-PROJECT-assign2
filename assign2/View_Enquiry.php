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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry List</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body class="ViewEnquiry">
    
<?php include "./include/admin_navbar.inc" ?>
<div class="admin_page">
<h1>Enquiry List</h1>

<table class="Enquiry_Table">
    <tr><td>
        <th>No</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email Address</th>
        <th>Street Address</th>
        <th>City/Town</th>
        <th>State</th>
        <th>Postcode</th>
        <th>Phone Number</th>
        <th>Tutorial</th>
    </tr></td>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Herbarium_DB";  // This is the same database as used in the form submission

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Fetch data from Enquiry_Form table
    $sql = "SELECT * FROM Enquiry_Form";  // Ensure this table exists and has data
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($row["id"]); ?></td>
                    <td><?php echo htmlspecialchars($row["firstName"]); ?></td>
                    <td><?php echo isset($row["lastName"]) ? htmlspecialchars($row["lastName"]) : 'N/A'; ?></td>
                    <td><?php echo htmlspecialchars($row["email"]); ?></td>
                    <td><?php echo htmlspecialchars($row["streetAddress"]); ?></td>
                    <td><?php echo htmlspecialchars($row["city"]); ?></td>
                    <td><?php echo htmlspecialchars($row["state"]); ?></td>
                    <td><?php echo htmlspecialchars($row["postcode"]); ?></td>
                    <td><?php echo htmlspecialchars($row["phone"]); ?></td>  
                    <td><?php echo htmlspecialchars($row["tutorial"]); ?></td>
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='10'>No results found</td></tr>";
        }
    } else {
        echo "<tr><td colspan='10'>Error: " . mysqli_error($conn) . "</td></tr>";
    }

    // Close the connection
    mysqli_close($conn);
?>
</table>
</div>
</body>
</html>