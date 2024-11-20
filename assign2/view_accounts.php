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
        <th>Delete</th>
        <th>Change password</th>
        <th>Change username</th>
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
    // Delete entry button
    if (isset($_POST['delete'])) {
        $delete_id = $_POST['delete_id'];
    
        // Database connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
    
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    
        // Prepare the SQL delete statement
        $sql = "DELETE FROM Accounts WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 'i', $delete_id);
        $resetSql = "SET @count = 0;
                 UPDATE Accounts SET id = (@count := @count + 1) ORDER BY id;
                 ALTER TABLE Accounts AUTO_INCREMENT = 1;";
        if (mysqli_multi_query($conn, $resetSql)) {
        do {
            if ($result = mysqli_store_result($conn)) {
                mysqli_free_result($result);    
            }
        } while (mysqli_next_result($conn));
    }
    
        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            echo "";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    
    
        // Close the connection
        mysqli_stmt_close($stmt);
    
        // Refresh the page to update the table
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
    // Change password
    if (isset($_POST['change_p'])) {
        $user_id = $_POST['user_id'];
        ?>
        <div class="padding20percent">
            <div class="form">
                <h2>Change Password for User ID: <?php echo $user_id; ?></h2>
                <form method="POST" action="">
                    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                    <label for="new_password">New Password:</label>
                    <input type="password" name="new_password" id="new_password" required>
                    <button type="submit" name="update_password">Update Password</button>
                </form>
            </div>
        </div>
        <?php
    }
    if (isset($_POST['update_password'])) {
        $user_id = $_POST['user_id'];
        $new_password = ($_POST['new_password']); // Hash the new password
    
        // Database connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    
        // Prepare SQL query to update password
        $sql = "UPDATE Accounts SET passkey = ? WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 'si', $new_password, $user_id);
    
        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "";
        } else {
            echo "Error updating password: " . mysqli_error($conn);
        }
    
        // Close connection
        mysqli_stmt_close($stmt);
    }
    // Change username
    if (isset($_POST['change_u'])) {
        $user_id = $_POST['user_id'];
        ?>
        <div class="padding20percent">
            <div class="form">
                <h2>Change Username for User ID: <?php echo $user_id; ?></h2>
                <form method="POST" action="">
                    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                    <label for="new_username">New Username:</label>
                    <input type="username" name="new_username" id="new_username" required>
                    <button type="submit" name="update_username">Update Username</button>
                </form>
            </div>
        </div>
        <?php
    }
    if (isset($_POST['update_username'])) {
        $user_id = $_POST['user_id'];
        $new_username = ($_POST['new_username']); // Hash the new password
    
        // Database connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    
        // Prepare SQL query to update password
        $sql = "UPDATE Accounts SET usersname = ? WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 'si', $new_username, $user_id);
    
        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "";
        } else {
            echo "Error updating username: " . mysqli_error($conn);
        }
    
        // Close connection
        mysqli_stmt_close($stmt);
    }
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
                    <td>
                        <form class="change_admin" method="POST" action="">
                            <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="delete">Delete</button>
                        </form>
                    </td>
                    <td>
                        <form class="change_admin" method="POST" action="">
                            <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="change_p">Change Password</button>
                        </form>
                    </td>
                    <td>
                        <form class="change_admin" method="POST" action="">
                            <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="change_u">Change Username</button>
                        </form>
                    </td>
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