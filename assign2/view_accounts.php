<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body class="ViewEnquiry">
    
<?php include "./include/admin_navbar.php" ?>
<div class="admin_page">
<h1>Accounts</h1>

<table class="Enquiry_Table">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email Address</th>
        <th>Username</th>
        <th>Password</th>
    </tr>

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
    $sql = "SELECT * FROM Accounts";  // Ensure this table exists and has data
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>    
                    <td><?php echo htmlspecialchars($row["id"]); ?></td>
                    <td><?php echo htmlspecialchars($row["1name"]); ?></td>
                    <td><?php echo htmlspecialchars($row["lastname"]); 'N/A'; ?></td>
                    <td><?php echo htmlspecialchars($row["email"]); ?></td>
                    <td><?php echo htmlspecialchars($row["usersname"]); ?></td>
                    <td><?php echo htmlspecialchars($row["passkey"]); ?></td>
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