<?php
// Database Credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Herbarium_DB";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

//check conneciton
if(!$conn) {
    die("Conneciton failed: " . mysqli_connect_error());
}

// Create the database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if(mysqli_query($conn, $sql)) {
    echo "";    
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// Select the database
mysqli_select_db($conn, $dbname);

//SQL to create the table
$sql = "CREATE TABLE IF NOT EXISTS Enquiry_Form (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    streetAddress VARCHAR(100),
    city VARCHAR(50),
    state VARCHAR(30),
    postcode VARCHAR(5),
    phone INT(10),
    tutorial VARCHAR(20) 
)"; 

// Execute the query to create the table
if(mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

//select the database
mysqli_select_db($conn, $dbname);

//SQL to create the table
$sql = "CREATE TABLE IF NOT EXISTS Accounts (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    role VARCHAR(10) NOT NULL DEFAULT 'User',
    1name VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    usersname VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    passkey VARCHAR(20) NOT NULL
)";
// Check if an admin already exists
$sql_check_admin = "SELECT * FROM Accounts WHERE `role` = 'admin' LIMIT 1";
$result = mysqli_query($conn, $sql_check_admin);

if (mysqli_num_rows($result) == 0) {
    // Insert an admin if no admin exists
    $admin_firstname = "Admin";
    $admin_lastname = "";
    $admin_email = "";
    $admin_username = "admin";
    $admin_passkey = "admin";

    // SQL to insert the admin
    $sql_insert_admin = "INSERT INTO Accounts (role, 1name, lastname, email, usersname, passkey) 
                         VALUES ('admin', '$admin_firstname', '$admin_lastname', '$admin_email', '$admin_username', '$admin_passkey')";

    if (mysqli_query($conn, $sql_insert_admin)) {
        echo "";
    } else {
        echo "Error inserting admin: " . mysqli_error($conn);
    }
} else {
    echo "";
}
// Exercute the query to create the table
if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
    //select the database
mysqli_select_db($conn, $dbname);

//SQL to create the table
$sql = "CREATE TABLE IF NOT EXISTS Contributions (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    plantName VARCHAR(25) NOT NULL,
    plantFamily VARCHAR(50) NOT NULL,
    plantGenus VARCHAR(50) NOT NULL,
    plantSpecies VARCHAR(50) NOT NULL,
    freshLeafPhoto VARCHAR(100) NOT NULL,
    herbariumPhoto VARCHAR(100) NOT NULL,
    submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Exercute the query to create the table
if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}


// Close the connection
mysqli_close($conn);
?>